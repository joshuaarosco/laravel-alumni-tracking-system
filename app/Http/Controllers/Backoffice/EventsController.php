<?php

namespace App\Http\Controllers\Backoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Events
use App\Events\SendEmailEvent;

//Services & Repositories
use App\Domain\Interfaces\Services\Backoffice\ICRUDService;
use App\Domain\Interfaces\Repositories\Backoffice\IEventsRepository;

//Request Validator
use App\Http\Requests\Backoffice\EventRequest;

//Global Classes
use Input;

class EventsController extends Controller
{
    //Do some magic
    public function __construct(IEventsRepository $repo, ICRUDService $CRUDservice){
        $this->data = [];
        $this->repo = $repo;
        $this->CRUDservice = $CRUDservice;
        $this->data['title'] = 'Event';
    }

    public function index(){
        $this->data['events'] = $this->repo->fetch();
        return view('backoffice.pages.events.index',$this->data);
    }

    public function create(EventRequest $request){
        $crudData = $this->CRUDservice->save($request, $this->repo);
        return redirect()->back();
    }

    public function view($id){
        $this->data['event'] = $this->repo->findOrFail($id);
        if(!$this->data['event']){
            return abort(404);
        }
        return view('backoffice.pages.events.view', $this->data);
    }

    public function edit(){
        $data['datas'] = $this->repo->findOrFail(Input::get('_id'));
        return response()->json($data,200);
    }

    public function update(Request $request){
        $crudData = $this->CRUDservice->save($request, $this->repo);
        return redirect()->back();
    }

    public function delete($id){
        return $this->CRUDservice->delete($id, $this->repo);
    }

}
