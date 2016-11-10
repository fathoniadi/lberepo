<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Html\FormFacade;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\User;
use App\Laboratory;
use App\Category;
use Hash;
use DB;
use Session;
use File;
use Response;
use Redirect;


class Auth extends Controller
{
    public function doLogin(Request $request)
    {

    	$validator = Validator::make($request->all(), [
            'nrp' => 'required',
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

            $flagLogin = User::where('password',$password)->where('nrp',$nrp)->select('id','role_id')->first();
            
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
        if(session('user')['id']) return Redirect::to('login');
        $data['labs'] = Laboratory::all();
        return view('homepage/register', $data);
    }

    public function getBidang(Request $request)
    {
        $lab = $request->input('lab');
        if(isset($lab))
        {
            $categoryLab = Category::where('laboratory_id',$lab)->get();
            echo json_encode($categoryLab);
        }
        else
        {
            $response = array('status'=>500);
            echo json_encode($response);
        }
    }

    public function doRegister(Request $request)
    {
        $rules = array(
            'name' => 'required',
            'nrp' => 'required',
            'phone' => 'required',
            'lab'=>'required',
            'lineID' => 'required',
            'password' => 'required',
            'retype-password' => 'required'
        );
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return Redirect::to('register')
                ->withErrors($validator);
        }
        else{
            if($request->input('retype-password') != $request->input('password')){
                return Redirect::to('register')
                    ->withErrors("Password miss matches");
            }
            $check_username = User::where('nrp', '=', $request->input('nrp'))->first();
            if($check_username){
                return Redirect::to('register')->withErrors("Akun sudah teregistrasi");
            }
            else{
                $user = new User($request->all());
                $user->password = hash('sha256',$request->input('password'));
                $user->role_id = 2;
                if($request->input('category_id')) $user->category_id = $request->input('category_id');
                $user->nrp = $request->input('nrp');
                $user->laboratory_id = $request->input('lab');
                $user->save();
                return Redirect::to('login')->with("message","Terima kasih sudah mendaftar. Silahkan login :)");
            }
        }
    }

    public function login(Request $request)
    {
        if(!session('user')['id']) return view('homepage/login');
        else return "Sudah login";
    }
}
