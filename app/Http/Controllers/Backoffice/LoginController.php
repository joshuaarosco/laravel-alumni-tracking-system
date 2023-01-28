<?php

namespace App\Http\Controllers\Backoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Logic\GeneralLogic as Logic;
use Auth;

class LoginController extends Controller
{
    //do some magic
    public function __construct(Logic $logic) {
        $this->logic = $logic;
		$this->middleware('backoffice.guest', ['except' => "logout"]);
	}

	public function login() {
		return view('backoffice.auth.login');
	}

	public function authenticate(Request $request, $redirect_uri = NULL) {
        return $this->logic->loginLogic($request, $redirect_uri);
	}

	public function logout() {
		return $this->logic->logoutLogic();
	}
}
