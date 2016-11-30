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

    public function isi(Request $request)
    {
        return view('dashboard/isikuesioner');
    }

    public function lihat(Request $request)
    {
        return view('dashboard/event');
    }

    public function catat(Request $request)
    {
        return view('dashboard/catatan');
    }

     public function saveCatat(Request $request)
    {
        echo $request->input("eventNote");
    }
}
