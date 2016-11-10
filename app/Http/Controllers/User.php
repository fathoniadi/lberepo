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

class User extends Controller
{
    public function index()
    {
    	//aktor semua, aktor dapat melihat detail user
    }

    public function createAdminLab()
    {
    	//aktor superadmin, superadmin dapat membuat user admin lab
    }

    public function deleteUserLbe()
    {
    	//aktor adminlab, aktor dapat menghapus user(maba)
    }

    public function deleteAdminLab()
    {
    	//aktor superadmin, aktor dapat menghapus user adminlab
    }

    public function editUser()
    {
    	// aktor semua, aktor dapat edit profile
    }

    public function doEditUser()
    {
    	//aktor semua, proses edit
    }

    public function showUser()
    {
    	//aktor adminlab, kdpm. untuk melihat detail profile dan aktivitas user
    }

    public function listUser()
    {
    	//aktor kdpm, adminLab, superadmin. untuk melihat list user perrole(jabatan)
    }



}
