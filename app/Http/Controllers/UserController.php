<?php

namespace App\Http\Controllers;
use App\TR_Users;
use Datatables;
use DB;

use Illuminate\Http\Request;

class UserController extends Controller
{
	public function __construct(){
      //$this->middleware('ceklogin');
    }

    function index(){
    	$user = TR_Users::all();
    	return view('master-content.user')->with('user', $user);
    }

    public function datatable(){
		$user = TR_Users::all();
		return Datatables::of($user)
		->addColumn('action', function ($user) {
		 return '<span class="btn btn-xs btn-primary" onClick="edit('.$user->user_id.')" >
		         <i class="fa fa-edit"></i> Edit </span>
		         <span class="btn btn-xs btn-danger" onClick="hapus('.$user->user_id.')" >
             <i class="fa fa-remove"></i> Hapus </span>';
        })->make(true);
  	}

	public function getedit($ID){
		$user = TR_Users::where('user_id', $ID)->get()->first();
		return response()->json($user);
	}

    public function save(Request $request){
	    $user = TR_Users::create($request->all());
	    $data['success'] = true;
	    $data['User'] = $user;
    	return response()->json($data);
  	}
  	public function update(Request $request,$ID){
	    $user = TR_Users::where('user_id', $ID)->update($request->all());
	    $data['success'] = true;
	    $data['TR_Users'] = $user;
	    return response()->json($data);
  	}

	public function delete($ID){
		$user = TR_Users::where('user_id',$ID)->delete();
		$data['success'] = true;
		$data['TR_Users'] = $user;
		return response()->json($data);
	}
}
