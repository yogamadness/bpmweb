<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

use App\Http\Models\General;
use App\Http\Models\SanksiHeader;

class ApiController extends Controller
{
		private static $_testUrl = "http://tap-flowdev.tap-agri.com/api/";
    private static $_devUrl = "http://apidev.tap-agri.com/";
    private static $_fakeUrl = "http://tap-flowdev.tap-agri.com/urlGetEmployee";
    private static $_online = 0; // 1 = online, 0 = offline

    public function __construct()
    {
        //$this->middleware('auth');
				//$this->middleware('ceklogin');
    }

	public function index()
    {
    	//
    }

	public function UrlGetEmployee()
    {
		$data = ["data"=>["NIK_NASIONAL"=>null,"NIK"=>"21/2131/0111/51","EMPLOYEE_NAME"=>"JUNAIDI","POB"=>"TEMBILAHAN","DOB"=>"06-JUL-78","SEX"=>"MALE","RELIGION"=>"ISLAM","ADDRESS"=>"TELUK KETAPANG KEC PEMAYUNG.KAB BATANG HARI","WERKS"=>"2131","COMP_CODE"=>"KK","COMP_NAME"=>"Karyawan Kontrak","EST_CODE"=>"31","EST_NAME"=>"PLASMA PEMAYUNG ESTATE","AFD_CODE"=>"A","AFD_NAME"=>"Afdeling A","SPV_NIK"=>null,"JOB_CODE"=>"PEMANEN","JOB_TYPE"=>"HV","STATUS"=>"KT","START_VALID"=>"01-JUL-16","END_VALID"=>"31-DEC-99","RES_DATE"=>null,"JOIN_DATE"=>"01-OCT-12","NO_KTP"=>null,"NPWP"=>null],"count"=>1];

    	return response()->json($data);
    }
	//for testing purposes only
    public function UrlEmpWorkStatus()
    {
		//$rows = DB::table('tm_general')->where('general_code','EMP_WORK_STATUS')->select('description_code ', 'description as text')->get();
    	$data = array();
		$rows = General::where('general_code','EMP_WORK_STATUS');
		foreach($rows->get() as $row) {
        	array_push($data, array('id' => $row->description_code, 'text' => $row->description));
        }
    	//$result = json_encode(array('data' => $data, 'count' => $rows->count()));
    	$result = array('data' => $data, 'count' => $rows->count());

    	return response()->json($result);
    }

    public static function GetEmpWorkStatus()
    {
    	$url = self::$_testUrl. 'urlEmpWorkStatus';
    	$json = file_get_contents($url);
		$array = json_decode($json);
		$result=array();
		foreach ($array->data as $value) {
        	array_push($result, array('id' => $value->id, 'text' => $value->text));
		}

    	//return view('api')->with('result', $result);
    	//return response()->json($result);
    	header('Content-type: application/json');
    	return json_encode($result);
    }

    public static function GetOptEmpWorkStatus()
    {
    	$url = self::$_testUrl. 'urlEmpWorkStatus';
    	$json = file_get_contents($url);
		$array = json_decode($json);
		$result=array();
		foreach ($array->data as $value) {
        	array_push($result, array('id' => $value->id, 'text' => $value->text));
		}

    	//return view('api')->with('result', $result);
    	//return response()->json($result);
    	header('Content-type: application/json');
    	return json_encode($result);
    }

    public static function GetOptCompany()
    {
			$curlService = new \Ixudra\Curl\CurlService();

    	$nik = base64_encode('/area/company');//?NIK=' . urlencode($nik_national));
    	$url = self::$_devUrl . $nik;

			$response = $curlService->to($url)->get();
			$array = json_decode($response);

    	// $getUrl = Input::get('url');
    	// if($getUrl == 1){
      //   	dd($url);
      //   }

    	// if(self::$_online == 1) {
    	// $json = @file_get_contents($url);
    	// if($json === false) {
      //   	$result = [];
      //   } else {
    		//$array = json_decode($json);
    		$result = array();
    		if(isset($array->data)) {
    			foreach ($array->data as $value) {
    				array_push($result, array('id' => $value->COMP_CODE, 'text' => $value->COMP_NAME));
    			}
        	}
        //}
        // } else { $result = []; }

    	header('Content-type: application/json');
    	return json_encode($result);
    }

    public static function GetOptBusinessArea()
    {
			$curlService = new \Ixudra\Curl\CurlService();
			$nik = base64_encode('/area/region');//?NIK=' . urlencode($nik_national));
    	$url = self::$_devUrl . $nik;

			$response = $curlService->to($url)->get();
			$array = json_decode($response);
			//
    	// $getUrl = Input::get('url');
    	// if($getUrl == 1){
      //   	dd($url);
      //   }
			//
    	// if(self::$_online == 1) {
    	// $json = @file_get_contents($url);
    	// if($json === false) {
      //   	$result = [];
      //   } else {
    	// 	$array = json_decode($json);
    		$result = array();
    		if(isset($array->data)) {
    			foreach ($array->data as $value) {
    				array_push($result, array('id' => $value->REGION_CODE, 'text' => $value->REGION_NAME));
    			}
        	}
        // }
        // } else { $result = []; }

    	header('Content-type: application/json');
    	return json_encode($result);
    }

    public static function GetOptAfdeling()
    {
			$curlService = new \Ixudra\Curl\CurlService();
			$nik = base64_encode('/area/afdeling');//?NIK=' . urlencode($nik_national));
    	$url = self::$_devUrl . $nik;

			$response = $curlService->to($url)->get();
			$array = json_decode($response);
			//
    	// $getUrl = Input::get('url');
    	// if($getUrl == 1){
      //   	dd($url);
      //   }
			//
    	// if(self::$_online == 1) {
    	// $json = @file_get_contents($url);
    	// if($json === false) {
      //   	$result = [];
      //   } else {
    	// 	$array = json_decode($json);
    		$result = array();
    		if(isset($array->data)) {
    			foreach ($array->data as $value) {
    				array_push($result, array('id' => $value->AFD_CODE, 'text' => $value->AFD_NAME));
    			}
        	}
        // }
        // } else { $result = []; }

    	header('Content-type: application/json');
    	return json_encode($result);
    }

    public static function GetOptJobCode()
    {
		//$rows = DB::table('tm_general')->where('general_code','EMP_WORK_STATUS')->select('description_code ', 'description as text')->get();
    // 	$result = array();
		// $rows = General::where('general_code','LEVEL_JABATAN');
		// foreach($rows->get() as $row) {
    //     	array_push($result, array('id' => $row->description_code, 'text' => $row->description));
    //     }
		//
    // 	header('Content-type: application/json');
    // 	return json_encode($result);
			$curlService = new \Ixudra\Curl\CurlService();
			$nik = base64_encode('/employee/jabatan');//?NIK=' . urlencode($nik_national));
			$url = self::$_devUrl . $nik;

			$response = $curlService->to($url)->get();
			$array = json_decode($response);
			//
			// $getUrl = Input::get('url');
			// if($getUrl == 1){
			// 		dd($url);
			// 	}
			//
			// if(self::$_online == 1) {
			// $json = @file_get_contents($url);
			// if($json === false) {
			// 		$result = [];
			// 	} else {
			// 	$array = json_decode($json);
				$result = array();
				if(isset($array->data)) {
					foreach ($array->data as $value) {
						array_push($result, array('id' => $value->JOB_TYPE, 'text' => $value->JOB_CODE));
					}
					}
				// }
				// } else { $result = []; }

			header('Content-type: application/json');
			return json_encode($result);
    }

    public static function GetOptJobType()
    {
			$curlService = new \Ixudra\Curl\CurlService();
			$nik = base64_encode('/area/company');//?NIK=' . urlencode($nik_national));
    	$url = self::$_devUrl . $nik;

			$response = $curlService->to($url)->get();
			$array = json_decode($response);
			// $getUrl = Input::get('url');
    	// if($getUrl == 1){
      //   	dd($url);
      //   }
			//
    	// if(self::$_online == 1) {
    	// $json = @file_get_contents($url);
    	// if($json === false) {
      //   	$result = [];
      //   } else {
    	// 	$array = json_decode($json);
    		$result = array();
    		if(isset($array->data)) {
    			foreach ($array->data as $value) {
    				array_push($result, array('id' => $value->COMP_CODE, 'text' => $value->COMP_NAME));
    			}
        	}
        // }
        // } else { $result = []; }

    	header('Content-type: application/json');
    	return json_encode($result);
    }

	public static function GetEmpAutoComplete()
	{
			$curlService = new \Ixudra\Curl\CurlService();
			$nik_national = Input::get('nik');
    	$comp_code = Input::get('$comp_code') ? '&comp_code='.Input::get('$comp_code') : '';
    	$nik = base64_encode('/employee/search');//?' . $comp_code);//?NIK=' . urlencode($nik_national));
    	$url = self::$_devUrl . $nik;

			$response = $curlService->to($url)->get();
			$array = json_decode($response);

			// $getUrl = Input::get('url');
    	// if($getUrl == 1){
      //   	dd($url);
      //   }
			//
    	// if(self::$_online == 1) {
    	// $json = @file_get_contents($url);
    	// if($json === false) {
      //   	$result = [];
      //   } else {
    	// 	$array = json_decode($json);
    		$result = array();

    		if(isset($array->data)) {
    			foreach ($array->data as $value) {
    				array_push($result, $value->NIK);
    			}
        	}
        // }
        // } else { $result = []; }

    	header('Content-type: application/json');
    	return $result;
    }

	public static function GetEmpAutoCompletePemanen()
	{
			$curlService = new \Ixudra\Curl\CurlService();
			$nik_national = Input::get('nik');
    	$nik = base64_encode('/employee/search?JOB_CODE=Pemanen');
    	$url = self::$_devUrl . $nik;
    	//if(self::$_online == 0) $url = self::$_testUrl . 'getEmpSearch';

			$response = $curlService->to($url)->get();
			$array = json_decode($response);
    	// $getUrl = Input::get('url');
    	// if($getUrl == 1){
      //   	dd($url);
      //   }
			//
    	// $json = @file_get_contents($url);
    	// if($json === false) {
      //   	$result = [];
      //   } else {
    	// 	$array = json_decode($json);
    		$result = array();
    		if(isset($array->data)) {
    			foreach ($array->data as $value) {
    				array_push($result, $value->NIK);
    			}
        	}
        //}

    	header('Content-type: application/json');
    	return $result;
    }


	public static function GetEmpSearch()
    {
    	return view('emp' );
    }

	public static function GetEmpAutoCompleteNonPemanen()
	{
			$curlService = new \Ixudra\Curl\CurlService();
			$nik_national = Input::get('nik');
    	$nik = base64_encode('/employee/search?JOB_CODE=SATPAM');
    	$url = self::$_devUrl . $nik;
    	//if(self::$_online == 0) $url = self::$_testUrl . 'getEmpSearch';

			$response = $curlService->to($url)->get();
			$array = json_decode($response);

    	// $getUrl = Input::get('url');
    	// if($getUrl == 1){
      //   	dd($url);
      //   }

    	// $json = @file_get_contents($url);
    	// if($json === false) {
      //   	$result = [];
      //   } else {
    	// 	$array = json_decode($json);
    		$result = array();
    		if(isset($array->data)) {
    			foreach ($array->data as $value) {
    				array_push($result, $value->NIK);
    			}
        	}
        // }

    	header('Content-type: application/json');
    	return $result;
    }

	public static function GetEmpByNIK($nik = null)
	{
			$curlService = new \Ixudra\Curl\CurlService();
			$nik_national = Input::get('nik') == '' ? $nik : Input::get('nik');
			//$nik = base64_encode('/employee/search?NIK=' . urlencode($nik_national));
    	$nik = base64_encode('/employee/getEmployee?NIK=' . urlencode($nik_national));
    	//$nik = urlencode(base64_encode('/employee/search?NIK=21'));

    	$url = self::$_devUrl . $nik;
    	//$url = self::$_fakeUrl;
			$response = $curlService->to($url)->get();
			$array = json_decode($response);
    	// $getUrl = Input::get('url');
    	// if($getUrl == 1){
      //   	dd($url);
      //   }

    	//if(self::$_online == 1) {
    	// if(1==1){
    	// $json = @file_get_contents($url);
    	// if($json === false) {
      //   	$result = [];
      //   } else {
    	// 	$array = json_decode($json);
    		$result = array();
    		if(isset($array->data)) {
    			//foreach ($array->data as $value) {
    			$value = $array->data;
                {
                	$pss = SanksiHeader::where('nik_sap',$value->NIK)->first();
    				array_push($result, array(
                            		'NIK_NASIONAL' => $value->NIK_NASIONAL,
                            		'NIK' => $value->NIK,
                            		'EMPLOYEE_NAME' => $value->EMPLOYEE_NAME,
                            		'POB' => $value->POB,
                            		'DOB' => date('d-M-Y', strtotime($value->DOB)),
                            		'RELIGION' => $value->RELIGION,
                            		'ADDRESS' => $value->ADDRESS,
                            		'WERKS' => $value->WERKS,
                            		'COMP_CODE' => $value->COMP_CODE,
                            		'COMP_NAME' => $value->COMP_NAME,
                            		'EST_CODE' => $value->EST_CODE,
                            		'EST_NAME' => $value->EST_NAME,
                            		'AFD_CODE' => $value->AFD_CODE,
                            		'AFD_NAME' => $value->AFD_NAME,
                            		'SPV_NIK' => $value->SPV_NIK,
                            		'JOB_CODE' => $value->JOB_CODE,
                            		'JOB_TYPE' => $value->JOB_TYPE,
                            		'STATUS' => $value->STATUS,
                            		'START_VALID' => $value->START_VALID,
                            		'END_VALID' => $value->END_VALID,
                            		'RES_DATE' => date('d-M-Y', strtotime($value->RES_DATE)),
                            		'JOIN_DATE' => date('d-M-Y', strtotime($value->JOIN_DATE)),
                            		'NO_KTP' => $value->NO_KTP,
                            		'AGE' => date_diff(date_create($value->DOB), date_create('today'))->format('%y Tahun %m Bulan %d Hari'),
                            		'PSS' => (isset($pss) ? $pss->trans_type_id : ''),
            					));
    			}
        	// }
        }
        // } else { $result = []; }

    	header('Content-type: application/json');
    	return $result;
	}
	public static function GetEmpProductivity()
	{
			$curlService = new \Ixudra\Curl\CurlService();
			$nik_national = Input::get('nik');
    	$nik = base64_encode('/employee/getProductivity?NIK=' . urlencode($nik_national) . '&date_start=' . date('Y-m-d') . '&date_end=4');
    	$url = self::$_devUrl . $nik;

			$response = $curlService->to($url)->get();
			$array = json_decode($response);
    	// $getUrl = Input::get('url');
    	// if($getUrl == 1){
      //   	dd($url);
      //   }
			//
    	// if(self::$_online == 1) {
    	// $json = @file_get_contents($url);
    	// if($json === false) {
      //   	$result = [];
      //   } else {
    	// 	$array = json_decode($json);
    		$result = array();
				if(isset($array->data)) {
					foreach ($array->data as $value) {
						array_push($result, array(
							'BULAN' => $value->BULAN,
							'KEHADIRAN' => $value->KEHADIRAN,
							'PRODUCTIVITY' => $value->PRODUCTIVITY,
						));
					}
				}
        // }
        // } else { $result = []; }

    	header('Content-type: application/json');
    	return $result;
	}
}
