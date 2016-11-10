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
class Dashboard extends Controller
{
    public function index(Request $request)
    {
        if(session('user')['id'])
        {
            return view('dashboard/index');
        }
        else
        {
            return Redirect::to('login');
        }
    }


    public function coba(Request $request)
    {
        var_dump($request->input('nrp'));
        
    }

}
