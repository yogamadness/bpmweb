<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use App\CurrentLogin;
use App\TAPAuth\Auth;
use Ramsey\Uuid\Uuid;
use URL;

class AuthController extends Controller
{
    function index(){
		return view('login')->with('pesan', 'Silahkan Masuk');
 	}

  	function getlogin(Request $request)
  	{
		$au = Auth::authenticate($request->username,$request->password);
		if ($au->valid == true) 
		{	
			$getuser = DB::table('TR_USER')->where('username', $request->username)->count();
			
			if ($getuser >= 1) {
				$getROle = DB::table('TR_USER u')
						->select('j.WORKFLOW_DETAIL_CODE')
						->join('TR_WORKFLOW_JOB j', 'u.JOB_CODE' , 'j.JOB_CODE')
						->join('TR_WORKFLOW_DETAIL d', 'j.WORKFLOW_DETAIL_CODE', 'd.WORKFLOW_DETAIL_CODE')
						->where('u.username', $request->username)
						->get();

				$roleCode = [];
				foreach ($getROle as $key => $code) {
					$roleCode[] = $code->workflow_detail_code;
				}

				$data = DB::table('TR_USER u')
					->join('TR_WORKFLOW_JOB j', 'u.JOB_CODE' , 'j.JOB_CODE')
					->join('TR_WORKFLOW_DETAIL d', 'j.WORKFLOW_DETAIL_CODE', 'd.WORKFLOW_DETAIL_CODE')
					->join('TR_WORKFLOW_DETAIL_MODUL dm', 'dm.WORKFLOW_DETAIL_CODE', 'd.WORKFLOW_DETAIL_CODE')
					->where('u.username', $request->username)
					->get();

				$datamenu = DB::table('TR_USER_ACCESSRIGHT a')
					->join('TR_WORKFLOW_DETAIL d', 'a.USER_ROLE', 'd.WORKFLOW_DETAIL_CODE')
					->join('TM_MENU m', 'a.MENU_CODE', 'm.MENU_CODE')
					->whereIn('a.USER_ROLE', $roleCode)
					->get();

				$viewMenu = DB::table('V_AUTHORIZE_MENU')->get();

				foreach ($datamenu as $key => $value) {
					$menu_name[] = $value->menu_name;
					$menu_url[] = $value->url;
					$parent_menu = $value->parent_menu;
				}
				
		    	$url = URL::to('/');

				// foreach ($datamenu as $key => $menus) {
				// 	if ($menus->url == null) {
				// 		$datas[] = '<a href="'.$url.'"><span class="glyphicon glyphicon-th" aria-hidden="true"></span>  '.$menus->menu_name.'</a>';
				// 	} else {
				// 		$datas[] = '<a href="'.$url.$menus->url.'"><span class="glyphicon glyphicon-th" aria-hidden="true"></span>  '.$menus->menu_name.'</a>';
				// 	}
				// }

		     	foreach ($data as $key => $value) 
		     	{
			        if ($value->workflow_detail_code != 0) {
			          $role_code['Role'][$value->workflow_detail_code][] = $value->workflow_detail_code ;
			          $role_name['RoleName'][$value->workflow_detail_code][] = $value->description ;
			            if ($value->modul_code !=0 ) {
			            $role_code['Role'][$value->workflow_detail_code]['Module'][] = $value->modul_code ;
			            //$role_name['RoleName'][$value->workflow_detail_code][] = $value->module_name;
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
		      // Session::set('menu_detail', $menu_detail);
		      // Session::set('menu_name', $menu_name);
		      // Session::set('menu_url', $menu_url);
		      Session::set('parent_menu', $parent_menu);
		      Session::set('menus', $viewMenu);
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

			}else{
				$data = "Username  atau Password Salah";
				return Redirect('/login')->with('pesan', 'Username atau Password Salah');
			}
		}else {
			return Redirect('/login')->with('pesan', 'Username atau Password Salah');
		}
	}

  function logout(){
    Session::flush();
    return Redirect('/login');
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
}
