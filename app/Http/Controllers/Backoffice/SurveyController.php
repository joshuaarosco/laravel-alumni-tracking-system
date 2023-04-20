<?php

namespace App\Http\Controllers\Backoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Events
use App\Events\SendEmailEvent;

//Services & Repositories
use App\Domain\Interfaces\Services\Backoffice\ICRUDService;
use App\Domain\Interfaces\Repositories\Backoffice\ISurveyRepository;
use App\Models\User;

//Request Validator
use App\Http\Requests\Backoffice\SurveyRequest;

//Global Classes
use Input;

class SurveyController extends Controller
{
    //Do some magic
    public function __construct(ISurveyRepository $repo, ICRUDService $CRUDservice, User $user){
        $this->data = [];
        $this->repo = $repo;
        $this->user = $user;
        $this->CRUDservice = $CRUDservice;
        $this->data['title'] = 'Survey';
        $this->data['courses'] = [
            'BS Computer Science',
            'BS Information Technology',
            'BS Mathematics',
            'BS Mathematics (CIT)',
            'BS Mathematics (Pure)',
            'BS Mathematics (Statistics)',
        ];
        $this->data['gender'] = [
            '' => 'Please choose a gender...',
            'male' => 'Male',
            'female' => 'Female'
        ];
        $this->data['relateds'] = [
            'Yes',
            'No'
        ];
        $this->data['question_7'] = [
            'a' => 'a. Did you have input your course of study?',
            'b' => 'b. Did you have a particular faculty advisor?',
            'c' => 'c. How would you rate the advising process?',
            'd' => 'd. Was the school helpful in getting a job?',
            'e' => 'e. Do you continue to interact with your instructor/professor?',
            'f' => 'f. Do you consider the advisor as mentor?',
        ];
    }

    public function index(){
        $this->data['survey'] = $this->repo->fetch();
        return view('backoffice.pages.survey.index',$this->data);
    }

    public function response(){
        $this->data['alumni'] = auth()->user()->alumni;
        $this->data['survey'] = $this->data['alumni']->survey;
        
        if(auth()->user()->type == 'alumni' AND auth()->user()->email_verified_at == null){
            session()->flash('notification-status', "danger");
            session()->flash('notification-msg', "Verify your email account first.");
            return redirect()->route('backoffice.index');
        }

        return view('backoffice.pages.survey.response', $this->data);
    }

    public function respond(SurveyRequest $request){
        $this->CRUDservice->save($request, $this->repo);
        return redirect()->back();
    }

    public function view($id){
        $this->data['survey'] = $this->repo->findOrFail($id);
        $this->data['alumni'] = $this->data['survey']->alumni;
        return view('backoffice.pages.survey.response', $this->data);
    }

    public function sendNotif(){
        $users = $this->user->where('type','alumni')->where('email_verified_at','!=',null)->get();
        $alumni = [];
        foreach($users as $index => $user){
            if(!$user->alumni->survey){
                array_push($alumni, $user->alumni);
            }
        }
        if($alumni){
            event(new SendEmailEvent($alumni,'tracker_notification'));
            session()->flash('notification-status', "success");
            session()->flash('notification-msg', "Notification has been sent!");
        }
        return redirect()->back();
    }

    public function delete($id){
        return $this->CRUDservice->delete($id, $this->repo);
    }
}
