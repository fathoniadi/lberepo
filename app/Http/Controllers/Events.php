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

class Events extends Controller
{
    public function viewEvent()
    {
    	//aktor admin,kdpm, use case admin bisa melihat event apa saja termasuk presensi dan komentar
    }

    public function saveEvent()
    {
    	//aktor user, proses simpan event
    }

    public function createEvent()
    {
    	//aktor admin lab, use case admin lab bisa membuat event
    }


    public function editEvent()
    {
    	//aktor admin lab, use case admin lab edit event yang sudah dibuat
    }

    public function doEditEvent()
    {
    	//aktor admin lab, proses edit event yang sudah dibuat
    }

    public function index()
    {
    	//aktor user, use case user dapat melihat dan mengisi materi pada event
    }

    public function deleteEvent()
    {
    	//aktor admin lab, use case admin lab hapus event
    }

    public function manageEvent()
    {
    	//aktor admin lab, use case admin melihat list event yang sudah dibuat
    }

    public function userEvent()
    {
    	//aktor user, use case user bisa melihat list event
    }

    public function labEvent()
    {
        //aktor kdpm, superadmin dapat melihat list event yang sudah dibuat
    }



}
