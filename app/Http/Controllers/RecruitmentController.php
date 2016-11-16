<?php

namespace App\Http\Controllers;

//common
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

//controllers
use App\Http\Controllers\ApiController;

class RecruitmentController extends Controller
{
    //
    public function index(){
        //return view('recruitment.create');  
    }

    public function create(){
            return view('recruitment.create');    
    }

    public function edit(){
            return view('recruitment.edit');   
    }
}
