<?php

namespace App\Http\Controllers\Backoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Events
use App\Events\SendEmailEvent;

//Services & Repositories
use App\Domain\Interfaces\Services\Backoffice\ICRUDService;
use App\Domain\Interfaces\Repositories\Backoffice\IAccountRepository;

//Request Validator
use App\Http\Requests\Backoffice\AccountRequest;
use App\Http\Requests\Backoffice\PasswordRequest;

use Illuminate\Support\Facades\Hash;
use App\Models\User;

//Global Classes
use Input, Auth;

class AccountController extends Controller
{
    //Do some magic
    public function __construct(IAccountRepository $repo, ICRUDService $CRUDservice){
        $this->data = [];
        $this->repo = $repo;
        $this->CRUDservice = $CRUDservice;
        $this->data['title'] = 'Account';
        $this->data['courses'] = [
            'AB English Language',
            'AB Economics',
            'Bachelor of Secondary Education',
            'Bachelor of Technology and Livelihood Education',
            'Bachelor of Technical and Vocational Teacher Education',
            'Bachelor of Public Administration',
            'BS Biology',
            'BS Computer Science',
            'BS Information Technology',
            'BS Hospitality Management',
            'BS Nutrition and Dietetics',
            'BS Social Work',
            'BS Business Administration major in Operations Mgt., Financial Mgt.',
            'BS Mathematics',
            'Bachelor of Industrial Technology',
        ];
        $this->data['gender'] = [
            '' => 'Please choose a gender...',
            'male' => 'Male',
            'female' => 'Female'
        ];
    }

    public function index(){
        $id = auth()->user()->id;
        $this->data['account'] = $this->repo->fetch($id);
        return view('backoffice.pages.account.index',$this->data);
    }

    public function update(AccountRequest $request){
        $this->CRUDservice->save($request, $this->repo);
        return redirect()->back();
    }

    public function updatePassword(PasswordRequest $request){
        $user = auth()->user();
        if (Hash::check($request->old_password, $user->password)) { 
            $user->fill([
                'password' => Hash::make($request->new_password)
            ])->save();

            session()->flash('notification-status', "success");
            session()->flash('notification-msg', "Password successfuly changed!");
         
            return redirect()->back();
         
        } else {
             
            session()->flash('notification-status', "danger");
            session()->flash('notification-msg', "Old password does not match!");

            return redirect()->back();
        }
    }

    public function sendVerification(){
        $user = auth()->user();
        if($user){
            event(new SendEmailEvent($user,'account_verification'));
            session()->flash('notification-status', "success");
            session()->flash('notification-msg', "Account verification has been sent!");
        }
        return redirect()->back();
    }

    public function verifyAccount($username){
        $user = User::where('username', $username)->first();
        $user->email_verified_at = date("Y-m-d H:i:s");
        $user->save();
        Auth::loginUsingId($user->id);

        if(auth()->check()){
            session()->flash('notification-status', "success");
            session()->flash('notification-msg', "Account successfully verified!");
			return redirect()->route('backoffice.survey.response');
		}
    }
}
