<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TAPAuth\Auth;
use App\Http\Controllers\login2Controller;
use App\DataMaster;
use Ixudra\Curl\CurlService;
use DB;

class DataMasterController extends Controller
{
    private static $_apiUrl = "http://apidev.tap-agri.com/";

    // public function index()
    // {
    //     return View('home');
    // }

    public function getGender(){
    	$data = DataMaster::where('general_code', 'GENDER')->get();
    	return $data;
    }

    public function getLevelJabatan(){
        $data = array();
        $rows =  DataMaster::where('general_code', 'LEVEL_JABATAN')->get();
        foreach($rows as $row) {
            array_push($data, array('id' => $row->description_code, 'text' => $row->description));
        }
    	return $data;
    }

    public function getStatusKaryawan(){
    	$data = array();
        $rows = DataMaster::where('general_code','EMP_WORK_STATUS')->get();
        foreach($rows as $row) {
            array_push($data, array('id' => $row->description_code, 'text' => $row->description));
        }
        return response()->json($data);
    }

    public function getAlasanPermintaan(){
    	$data = DataMaster::where('general_code', 'ALASAN_TERMINASI')->get();
    	return $data;
    }

    public function getJabatan($key)
    {
        $nik = strtr(base64_encode('/employee/jabatan?JOB_CODE='.$key), '+/=', '-_,');
        $url = self::$_apiUrl . $nik;

        $curlService = new CurlService;
        $json = $curlService->to($url)->get();
        $array = json_decode($json);

        return response()->json($array->data);
    }

    public function getCompany()
    {
        $nik = strtr(base64_encode('/area/company'), '+/=', '-_,');
        $url = self::$_apiUrl . $nik;

        $curlService = new CurlService;
        $json = $curlService->to($url)->get();
        $array = json_decode($json);

        return response()->json($array->data);
    }
}
