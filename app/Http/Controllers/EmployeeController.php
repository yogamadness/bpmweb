<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use App\Employee;
use Datatables;
use DB;

class EmployeeController extends Controller
{
  // public function __construct(){
  // $this->middleware('auth');
  // }

  public function index(){
   $employee = Employee::all();
   return view('master/employee')->with('Employee',$employee);
  }

  public function datatable(){

    $employee = Employee::all();
    return Datatables::of($employee)
    ->addColumn('action', function ($employee) {
     return '<span class="btn btn-xs btn-primary" onClick="edit2('.$employee->id.')" >
             <i class="fa fa-edit"></i> Edit </span>
             <span class="btn btn-xs btn-danger" onClick="hapus('.$employee->id.')" >
             <i class="fa fa-remove"></i> Hapus </span>';
        })->make(true);
  }

  public function getedit($ID){
    $employee = Employee::where('id', $ID)->get()->first();
    return response()->json($employee);
  }

  public function save(Request $request){
    $employee = Employee::create($request->all());
    $data['success'] = true;
    $data['Employee'] = $employee;

    // return redirect('employee');
    return response()->json($data);
  }

  public function update(Request $request,$ID){
    $employee = Employee::where('id', $ID)->update($request->all());
    $data['success'] = true;
    $data['Employee'] = $employee;
    return response()->json($data);
  }

  public function delete($ID){
    $employee = Employee::where('id',$ID)->delete();
    $data['success'] = true;
    $data['Employee'] = $employee;
    return response()->json($data);
  }
}
