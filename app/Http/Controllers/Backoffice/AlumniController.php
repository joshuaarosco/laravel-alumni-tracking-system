<?php

namespace App\Http\Controllers\Backoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Events
use App\Events\SendEmailEvent;

//Services & Repositories
use App\Domain\Interfaces\Services\Backoffice\ICRUDService;
use App\Domain\Interfaces\Repositories\Backoffice\IAlumniRepository;

//Request Validator
use App\Http\Requests\Backoffice\AlumniRequest;

//Global Classes
use Input;

class AlumniController extends Controller
{
    //Do some magic
    public function __construct(IAlumniRepository $repo, ICRUDService $CRUDservice){
        $this->data = [];
        $this->repo = $repo;
        $this->CRUDservice = $CRUDservice;
        $this->data['title'] = 'Alumni';
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
    }

    public function index(){
        $this->data['alumni'] = $this->repo->fetch();
        return view('backoffice.pages.alumni.index',$this->data);
    }

    public function create(AlumniRequest $request){
        $crudData = $this->CRUDservice->save($request, $this->repo);
        if($crudData){
            event(new SendEmailEvent($crudData,'alumni_creation'));
        }
        return redirect()->back();
    }

    public function edit(){
        $data['datas'] = $this->repo->findOrFail(Input::get('_id'));
        return response()->json($data,200);
    }

    public function update(Request $request){
        return $this->CRUDservice->save($request, $this->repo);
    }

    public function delete($id){
        return $this->CRUDservice->delete($id, $this->repo);
    }
}
