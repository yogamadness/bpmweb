<?php

namespace App\Http\Controllers;

//common
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use app\Http\Models\Reqruitment;
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

    public function store(Request $request){
           $input = $request->all();
           print_r($input['EPH_CODE']);
            return 'test';  
    }
}
