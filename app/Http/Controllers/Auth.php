<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Html\FormFacade;
use App\User;
use App\Laboratory;
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
        else
        {

        	$nrp = $request->input('nrp');
        	$password = hash('sha256',$request->input('password'));

            $flagLogin = User::where('password',$password)->where('nrp',$nrp)->first();
            
            if($flagLogin)
            {
                $dataUser = array('nrp' => $flagLogin['nrp'], 'role' => $flagLogin['role_id'] );
                $request->session()->put('user',$dataUser);
            }
            else
            {
                return Redirect::to('login')
                    ->withErrors("NRP atau Password salah");
            }
        }
    }

    public function index(Request $request)
    {
        if(session('user')['nrp'])
        {

        }
        else
        {
            return view('auth/login');
        }
    }


    public function register(Request $request)
    {
        $data['lab'] = Laboratory::all();
        echo json_encode($data['lab']);
    }

    public function getBidang(Request $request)
    {
        $lab = $request->input('lab');
        
    }

    public function doRegister(Request $request)
    {
    	
    }

    public function login(Request $request)
    {
    	return view('auth/login');
    }
}
