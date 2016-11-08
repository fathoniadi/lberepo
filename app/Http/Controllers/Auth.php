<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Html\FormFacade;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\User;
use App\Laboratory;
use Auth;
use Hash;
use DB;
use Session;
use File;
use Response;


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
                $dataUser = array('id' => $flagLogin['id'], 'role' => $flagLogin['role_id'] );
                $request->session()->put('user',$dataUser);

                return "Hahaha";
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
        if(session('user')['id'])
        {

        }
        else
        {
            return Redirect::to('login');
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
        $rules = array(
            'name' => 'required',
            'NRP' => 'required',
            'phone' => 'required',
            'lineID' => 'required',
            'password' => 'required'
        );
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
//            return view('')
//                ->withErrors($validator);
//                ->withInput(Input::except('password'));
        }
        else{
            $check_username = User::where('NRP', '=', $request->input('NRP'))->first();
            if($check_username){
                Session::flash('fail', 'NRP sudah digunakan');
//                return redirect()->route('');
            }
            else{
                $user = new User($request->all());
                $user->password = hash('sha256',$request->input('password'));
                $user->role_id = 2;
                $user->save();
                Session::flash('success', '');
//                return redirect()->route('');
            }
        }
    }

    public function login(Request $request)
    {
        if(!session('user')['id']) return view('auth/login');
        else return "Sudah login";
    }
}
