<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TAPAuth\Auth;
use App\Http\Controllers\login2Controller;
use Session;
use DB;

class HomeController extends Controller
{
    public function __construct(){
      $this->middleware('ceklogin');
    }

    public function index()
    {
        return View('home');
    }
}
