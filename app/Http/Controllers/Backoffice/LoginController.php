<?php

namespace App\Http\Controllers\Backoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Logic\GeneralLogic as Logic;
use App\Models\User;
use Auth;

//Events
use App\Events\SendEmailEvent;

//Requests
use App\Http\Requests\Backoffice\VerifyRequest;

//Repositories
use App\Domain\Interfaces\Repositories\Backoffice\IAlumniRepository;

class LoginController extends Controller
{
    //do some magic
    public function __construct(Logic $logic, User $user, IAlumniRepository $alumniRepo) {
        $this->user = $user;
        $this->logic = $logic;
        $this->alumniRepo = $alumniRepo;
		$this->middleware('backoffice.guest', ['except' => "logout"]);
	}

	public function login() {
		return view('backoffice.auth.login');
	}

	public function loginWithId($username){
		$user = $this->user->where('username', $username)->first();
		Auth::loginUsingId($user->id);
		if(auth()->check()){
			return redirect()->route('backoffice.survey.response');
		}
	}

	public function authenticate(Request $request, $redirect_uri = NULL) {
        return $this->logic->loginLogic($request, $redirect_uri);
	}

	public function logout() {
		return $this->logic->logoutLogic();
	}

	public function verify(){
		return view('backoffice.auth.verify');
	}

	public function check(VerifyRequest $request){
		$crudData = $this->alumniRepo->checkAlumni($request);
        if($crudData){
            session()->flash('notification-status', "success");
            session()->flash('notification-msg', 'Verified! Please check your email.');
			Auth::loginUsingId($crudData->id);
            event(new SendEmailEvent($crudData,'alumni_creation'));
			return redirect()->route('backoffice.index');
        }
		return redirect()->back();
	}
}
