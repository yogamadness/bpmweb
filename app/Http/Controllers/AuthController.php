<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use App\CurrentLogin;
use App\TAPAuth\Auth;
use Ramsey\Uuid\Uuid;

class AuthController extends Controller
{
    function index(){
		return view('login');
 	}

  	function getlogin(Request $request)
  	{
		$au = Auth::authenticate($request->username,$request->password);

		if ($au->valid == true) 
		{
			$data = DB::table('TR_USER as u')
				->join('TR_WORKFLOW_JOB as j', 'u.job_code' , 'j.job_code')
				->join('TR_WORKFLOW_DETAIL as d', 'j.WORKFLOW_DETAIL_CODE', 'd.WORKFLOW_DETAIL_CODE')
				->join('TM_MODULE as m', 'd.WORKFLOW_DETAIL_CODE', 'm.WORKFLOW_DETAIL_CODE')
				->where('u.username', $request->username)
				->get();
	     	foreach ($data as $key => $value) {

		        if ($value->workflow_detail_code != 0) {
		          $role_code['Role'][$value->workflow_detail_code][] = $value->workflow_detail_code ;
		          $role_name['RoleName'][$value->workflow_detail_code][] = $value->description ;
		            if ($value->module_code !=0 ) {
		            $role_code['Role'][$value->workflow_detail_code]['Module'][] = $value->module_code ;
		            $role_name['RoleName'][$value->workflow_detail_code][] = $value->module_name;
		            }
		        }
		        // Save Session
		        $sessionid = Uuid::uuid4()->getHex();
		        Session::set('session_id', $sessionid);
		        Session::set('user_id', $value->user_id);
				Session::set('area_code', $value->area_code);
				Session::set('nik', $value->nik);
				Session::set('ref_role', $value->ref_role);
				Session::set('nama', $value->nama);
				Session::set('username', $value->username);
				Session::set('email', $value->email);
				Session::set('job_code', $value->job_code);
	    	}

	      Session::set('role_code', $role_code);
	      Session::set('role_name', $role_name);
	      $session = Session::all();      
	      // Save and Update to TR_CURRENT_LOGIN
	      $result = DB::table('TR_CURRENT_LOGIN')->where('USER_ID', '=', Session::get('user_id'))->get();
			if ($result->count() >= 1) {
				DB::table('TR_CURRENT_LOGIN')
				->where('USER_ID', $value->user_id)
				->update(['SESSION_ID' => Session::get('session_id')]);
			}else{
				DB::table('TR_CURRENT_LOGIN')
				->insert(['USER_ID' => Session::get('user_id'),'SESSION_ID' => Session::get('session_id')]);
			}
				return Redirect('/');
		}else {
			return Redirect('/loginn');
		}
	}

  function logout(){
    Session::flush();
    return Redirect('/loginn');
  }
  function reload(){
    $result = DB::table('TR_CURRENT_LOGIN')->where([
      ['USER_ID', '=', Session::get('user_id')],
      ['SESSION_ID', '=', Session::get('session_id')]
    ])->get();

    if ($result->count() >= 1) {
      $data['success'] = true;
      return response()->json($data);
    }
  }
  function test(){
  	$curlService = new \Ixudra\Curl\CurlService();
    $url = base64_encode('/login?username=yaddi.surahman&password=123456');
    $response = $curlService->to('http://apidev.tap-agri.com/'.$url)->get();
    $valid = json_decode($response);
    dd($url);
    return $valid;
  }
}
