<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TAPAuth\Auth;
use App\Http\Controllers\login2Controller;
use App\DataMaster;
use DB;

class DataMasterController extends Controller
{

    // public function index()
    // {
    //     return View('home');
    // }

    public function getGender(){
    	$data = DataMaster::where('general_code', 'GENDER')->get();
    	return $data;
    }

    public function getLevelJabatan(){
    	$data = DataMaster::where('general_code', 'LEVEL_JABATAN')->get();
    	return $data;
    }

    public function getStatusKaryawan(){
    	$data = DataMaster::where('general_code', 'MARRIAGE_STATUS')->get();
    	return $data;
    }

    public function getAlasanPermintaan(){
    	$data = DataMaster::where('general_code', 'ALASAN_TERMINASI')->get();
    	return $data;
    }
}
