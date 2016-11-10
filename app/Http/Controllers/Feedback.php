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

class Feedback extends Controller
{
    public function index()
    {
    	//aktor admin lab, admin lab dapat melihat list feedback yang sudah dibuat
    }


    public function createFeedback()
    {
    	//aktor admin lab, admin lab dapat membuat isian feedback
    }

    public function editFeedback()
    {
    	//aktor admin lab, admin lab dapat edit feedback yang sudah dibuat
    }

    public function doEditFeedback()
    {
    	//aktor admin lab, proses edit feedback	
    }


    public function deleteFeedback()
    {
    	//aktor admin lab, admin lab dapat delete feedback yang sudah dibuat
    }
}
