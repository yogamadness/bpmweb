<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Session;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Ixudra\Curl\CurlService;
use nusoap_client;

use App\Http\Models\General;
use App\Http\Models\SanksiHeader;

class ApiController extends Controller
{
	private static $_webUrl = "http://tap-flowdev.tap-agri.com/api/";
    private static $_apiUrl = "http://apidev.tap-agri.com/";
    private static $_testUrl = "http://tap-flowdev.tap-agri.com/urlGetEmployee";
    private static $_soapPdmUrl = "https://qa-bpm:9443/teamworks/webservices/TAPHC/WS_PDM.tws?WSDL";
    private static $_soapPsaUrl = "https://qa-bpm:9443/teamworks/webservices/TAPHC/WS_PSA.tws?WSDL";

	public  $doc_code;
	public  $bpm_code;
	public  $status;
	public  $notes;

    private static $_online = 0; // 1 = online, 0 = offline

    public function __construct()
    {
        //$this->middleware('ceklogin');
    }

	public function PushWsdl($endpoint, $params)
    {
    	$client = new nusoap_client(self::$_soapPdmUrl, true);

        $err = $client->getError();
    	if ($err) {
    		$message = $err;
        } else {
    		$res = $client->call($endpoint, $params);
        	if ($client->fault) {
    			$message = $res;
        	} else {
        		$err = $client->getError();
        		if ($err) {
                	$message = $err; //cause:wrong url,etc.
                } else {
                	$message = $res; //success
                }
        	}
        }

    	return $message;
    }

	public function PostWsdlPdmCreate()
    {
    	$doc_code = Input::get('doc_code') ? Input::get('doc_code') : $this->doc_code; //'16.11/HC/PDM-NS/00001'

    	$params = array(
        				'userId' => Session::get('user_id'),
        				'docCode' => $doc_code,
        				'areaCode' => Session::get('area_code'),
        			);
    	return $this->PushWsdl('createPDM', $params);
    }

	public function PostWsdlPdmApprove()
    {
    	$bpm_code = Input::get('bpm_code') ? Input::get('bpm_code') : $this->bpm_code;
    	$status = Input::get('status') ? Input::get('status') : $this->status;
    	$notes = Input::get('notes') ? Input::get('notes') : $this->notes;

    	$params = array(
        				'userId' => Session::get('user_id'),
        				'bpmCode' => $bpm_code,
        				'status' => $status,
        				'notes' => $notes,
        				'areaCode' => Session::get('area_code'),
        			);
    	return $this->PushWsdl('approvePDM', $params);
    }
/*
	public function UrlGetEmployee()
    {
		$data = ["data"=>["NIK_NASIONAL"=>null,"NIK"=>"21/2131/0111/51","EMPLOYEE_NAME"=>"JUNAIDI","POB"=>"TEMBILAHAN","DOB"=>"06-JUL-78","SEX"=>"MALE","RELIGION"=>"ISLAM","ADDRESS"=>"TELUK KETAPANG KEC PEMAYUNG.KAB BATANG HARI","WERKS"=>"2131","COMP_CODE"=>"KK","COMP_NAME"=>"Karyawan Kontrak","EST_CODE"=>"31","EST_NAME"=>"PLASMA PEMAYUNG ESTATE","AFD_CODE"=>"A","AFD_NAME"=>"Afdeling A","SPV_NIK"=>null,"JOB_CODE"=>"PEMANEN","JOB_TYPE"=>"HV","STATUS"=>"KT","START_VALID"=>"01-JUL-16","END_VALID"=>"31-DEC-99","RES_DATE"=>null,"JOIN_DATE"=>"01-OCT-12","NO_KTP"=>null,"NPWP"=>null],"count"=>1];

    	return response()->json($data);
    }
*/
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

    public static function GetOptEmpWorkStatus()
    {
    /*
    	$url = self::$_webUrl. 'urlEmpWorkStatus';

    	$curlService = new CurlService;
    	$json = $curlService->to($url)->get();
		$array = json_decode($json);
    */
    	$rows = General::where('general_code','EMP_WORK_STATUS');
		$result=array();
    	//if(isset($array->data)) {
			//foreach ($array->data as $value) {
			foreach ($rows->get() as $value) {
        		//array_push($result, array('id' => $value->text, 'text' => $value->text));
        		array_push($result, array('id' => $value->description, 'code' => $value->description_code, 'text' => $value->description));
			}
		//}
    	//return response()->json($result);
    	return json_encode($result);
    }

    public static function GetOptCompany()
    {
    	$nik = strtr(base64_encode('/area/company'), '+/=', '-_,');
    	$url = self::$_apiUrl . $nik;

    	$curlService = new CurlService;
    	$json = $curlService->to($url)->get();
    	$array = json_decode($json);

    	$result = array();
    	if(isset($array->data)) {
    		foreach ($array->data as $value) {
    			array_push($result, array('id' => $value->COMP_NAME, 'text' => $value->COMP_NAME));
    		}
    	}

    	//return response()->json($result);
    	return json_encode($result);
    }

    public static function GetOptBusinessArea()
    {
    	$nik = strtr(base64_encode('/area/estate'), '+/=', '-_,');

    	$url = self::$_apiUrl . $nik;

    	$curlService = new CurlService;
    	$json = $curlService->to($url)->get();
    	$array = json_decode($json);

    	$result = array();
    	if(isset($array->data)) {
    		foreach ($array->data as $value) {
    			array_push($result, array('id' => $value->EST_NAME, 'text' => $value->EST_NAME));
    		}
    	}

    	return json_encode($result);
    }

    public static function GetOptAfdeling()
    {
    	$nik = strtr(base64_encode('/area/company'), '+/=', '-_,');
    	$url = self::$_apiUrl . $nik;
    	$curlService = new CurlService;
    	$json = $curlService->to($url)->get();
    	$arr_comp = json_decode($json);

    	$nik = strtr(base64_encode('/area/estate'), '+/=', '-_,');
    	$url = self::$_apiUrl . $nik;
    	$curlService = new CurlService;
    	$json = $curlService->to($url)->get();
    	$arr_est = json_decode($json);

    	$nik = strtr(base64_encode('/area/afdeling'), '+/=', '-_,');
    	$url = self::$_apiUrl . $nik;
    	$curlService = new CurlService;
    	$json = $curlService->to($url)->get();
    	$arr_afd = json_decode($json);

    	$result = array();

    	if(isset($arr_comp->data)) {
    		foreach ($arr_comp->data as $val_comp) {
            	$res_est = array();
            /*
        		$nik = strtr(base64_encode('/area/estate?REGION_CODE='.$val_comp->REGION_CODE.'&COMP_CODE='.$val_comp->COMP_CODE), '+/=', '-_,');
        		$url = self::$_apiUrl . $nik;

        		$curlService = new CurlService;
        		$json = $curlService->to($url)->get();
        		$arr_est = json_decode($json);
            */
    			if(isset($arr_est->data)) {
    				foreach ($arr_est->data as $val_est) {
                    	if($val_comp->REGION_CODE == $val_est->REGION_CODE && $val_comp->COMP_CODE == $val_est->COMP_CODE) {
    					$res_afd = array();
                	/*
    					$nik = strtr(base64_encode('/area/afdeling?REGION_CODE='.$val_est->REGION_CODE.'&COMP_CODE='.$val_comp->COMP_CODE.'&EST_CODE='.$val_est->EST_CODE), '+/=', '-_,');
    					$url = self::$_apiUrl . $nik;

    					$curlService = new CurlService;
    					$json = $curlService->to($url)->get();
    					$arr_afd = json_decode($json);
                	*/
    					if(isset($arr_afd->data)) {
    						foreach ($arr_afd->data as $val_afd) {
                            if($val_est->REGION_CODE == $val_afd->REGION_CODE && $val_est->COMP_CODE == $val_afd->COMP_CODE && $val_est->EST_CODE == $val_afd->EST_CODE) {
                        		array_push($res_afd, array('id' => $val_afd->AFD_NAME, 'text' => $val_afd->AFD_NAME));
                            }
    						}
    					}

                		array_push($res_est, array('id' => $val_est->EST_NAME, 'text' => $val_est->EST_NAME, 'data' => $res_afd));
                        }
    				}
    			}

    			array_push($result, array('id' => $val_comp->COMP_NAME, 'text' => $val_comp->COMP_NAME, 'data' => $res_est));
    		}
    	}

    	return json_encode($result);
    }

    public static function GetOptJobCode()
    {
    	$nik = base64_encode('/employee/jabatan');//?NIK=' . urlencode($nik_national));
    	$url = self::$_apiUrl . $nik;

    	$curlService = new CurlService;
    	$json = $curlService->to($url)->get();
    	$array = json_decode($json);

    	$result = array();
    	if(isset($array->data)) {
    		foreach ($array->data as $value) {
    			array_push($result, array('id' => $value->JOB_CODE, 'text' => $value->JOB_CODE));
    		}
    	}

    	return json_encode($result);
    }

    public static function GetOptJobType()
    {
    	$nik = base64_encode('/area/company');//?NIK=' . urlencode($get_nik));
    	$url = self::$_apiUrl . $nik;

    	$curlService = new CurlService;
    	$json = $curlService->to($url)->get();
    	$array = json_decode($json);

    	$result = array();
    	if(isset($array->data)) {
    		foreach ($array->data as $value) {
    			array_push($result, array('id' => $value->COMP_NAME, 'text' => $value->COMP_NAME));
    		}
    	}

    	return json_encode($result);
    }

	public static function GetEmpAutoComplete()
	{
    	$get_nik = Input::get('nik');
    	$comp_code = Input::get('comp_code') ? '&comp_code='.Input::get('comp_code') : '';
    	$nik = base64_encode('/employee/search');//?' . $comp_code);//?NIK=' . urlencode($get_nik));
    	$url = self::$_apiUrl . $nik;

    	$curlService = new CurlService;
    	$json = $curlService->to($url)->get();
    	$array = json_decode($json);

    	$result = array();
    	if(isset($array->data)) {
    		foreach ($array->data as $value) {
    			array_push($result, $value->NIK);
    		}
    	}

    	//return json_encode($result);
    	return $result;
    }

	public static function GetEmpAutoCompletePemanen()
	{
    	$get_nik = Input::get('nik');
    	$nik = base64_encode('/employee/search?JOB_CODE=Pemanen');
    	$url = self::$_apiUrl . $nik;

    	$curlService = new CurlService;
    	$json = $curlService->to($url)->get();
    	$array = json_decode($json);

    	$result = array();
    	if(isset($array->data)) {
    		foreach ($array->data as $value) {
    			array_push($result, $value->NIK);
    		}
    	}

    	//return json_encode($result);
    	return $result;
    }

	public static function GetEmpAutoCompleteNonPemanen()
	{
    	$get_nik = Input::get('nik');
    	$nik = base64_encode('/employee/search');//?JOB_CODE=SATPAM');
    	$url = self::$_apiUrl . $nik;

    	$curlService = new CurlService;
    	$json = $curlService->to($url)->get();
    	$array = json_decode($json);

    	$result = array();
    	if(isset($array->data)) {
    		foreach ($array->data as $value) {
    			array_push($result, $value->NIK);
    		}
    	}

    	//return json_encode($result);
    	return $result;
    }

	public static function GetEmpByNIK($nik = null)
	{
    	$get_nik = Input::get('nik') == '' ? $nik : Input::get('nik');
    	$nik = base64_encode('/employee/getEmployee?NIK=' . urlencode($get_nik));
    	$url = self::$_apiUrl . $nik;

    	$curlService = new CurlService;
    	$json = $curlService->to($url)->get();
    	$array = json_decode($json);

    	$result = array();
    	if(isset($array->data)) {
    		//foreach ($array->data as $value) {
    		$value = $array->data;
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
																'EFFECTIVE_DATE' => (isset($pss) ? $pss->effective_date : ''),
    		));
    	}
        // } else { $result = []; }

    	return $result;
	}
	public static function GetEmpProductivity()
	{
    	$get_nik = Input::get('nik');
    	$nik = base64_encode('/employee/getProductivity?NIK=' . urlencode($get_nik) . '&date_start=' . date('Y-m-d') . '&date_end=3');
    	$url = self::$_apiUrl . $nik;

    	$curlService = new CurlService;
    	$json = $curlService->to($url)->get();
    	$array = json_decode($json);

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

    	return $result;
	}
}
