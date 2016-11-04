<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Html\FormFacade;
use Session;
use DB;
use Cookie;
use Redirect;

class Auth extends Controller
{
    public function doLogin(Request $request)
    {

    	$validator = Validator::make($request->all(), [
            'nrp' => 'required|integer',
            'password' => 'required',
        ]);

    	if($validator->fails())
        {
            return Redirect::to('login')
                ->withErrors($validator);
        }


    	$nrp = $request->input('nrp');
    	$password = $request->input('password');
    	echo $nrp.' '.$password;

    }


    public function register(Request $request)
    {

    }

    public function doRegister(Request $request)
    {
    	
    }

    public function login(Request $request)
    {
    	return view('auth/login');
    }
}
