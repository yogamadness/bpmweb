<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BalikanStringHtmlController extends Controller
{
    public function index()
    {
    	// $testing = '<html><body><h3>Ucup</h3></body></html>';
    	$data  = array(
    		"data" => 	'<div class="input-group">
						  <h4>
						    <i>Alasan Permintaan</i>
						  </h4>
						</div>
						<div class="row">
						  <div class="col-md-12">
						    <div class="form-group">
						      <label class="col-sm-3 control-label" for="reason_request">
						        <span class="pull-left">
						          Alasan Permintaan
						        </span>
						      </label>
						      <div class="col-sm-3">
						        <select class="form-control" name="reason_request" id="reason_request">
						          <option value=" ">--Pilih--</option>
						        </select>
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="col-sm-3 control-label" for="employee_before">
						        <span class="pull-left">
						          Nama Karyawan yang Digantikan
						        </span>
						      </label>
						        <div class="col-sm-5">
						          <input type="text" placeholder="Nama Karyawan" id="employee_before" class="form-control" name="employee_before">
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="col-sm-3 control-label" for="description">
						        <span class="pull-left">
						          Keterangan
						        </span>
						      </label>
						      <div class="col-sm-6">
						        <textarea class="form-control" name="description" id="description"></textarea>
						      </div>
						    </div>
						  </div>
						</div>
						<hr>
						<div class="input-group">
						  <h4>
						    <b>Data Pendukung</b>
						  </h4>
						</div>
						<div class="input-group">
						  <h4>
						    <i>Data Karyawan Sesuai Jabatan yang diminta saat ini</i>
						  </h4>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
								    <label class="col-sm-7 control-label" for="mpe_total">
								        <span class="pull-left">
								          	MPE
								        </span>
								    </label>
							      <div class="col-sm-4">
							        <input type="text" placeholder="" id="mpe_total" class="form-control" name="mpe_total">
							      </div>
								    <label class="col-sm-1 control-label" style="padding-left: 0px;">
								        <span class="pull-left">
								        	Orang
								        </span>
								    </label>
								</div>
							</div>
						</div>
						<hr>
						<div class="input-group">
						  <h4>
						    <b>Rekomendasi Calon Karyawan</b>
						  </h4>
						</div>
						<div class="row">
						  <div class="col-md-12">
						    <div class="form-group">
						      <label class="col-sm-3 control-label" for="employee_recommendation">
						        <span class="pull-left">
						          Ada Calon yaang Disarakan ?
						        </span>
						      </label>
						      <div class="col-sm-3">
						        <select class="form-control" class="calonDisarankan" id="employee_recommendation" name="employee_recommendation">
						          <option value=" ">--Pilih--</option>
						          <option>YA</option>
						          <option>TIDAK</option>
						        </select>
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="col-sm-3 control-label" for="employee_from">
						        <span class="pull-left">
						          Asal Karyawan
						        </span>
						      </label>
						      <div class="col-sm-3">
						        <select class="form-control" id="employee_from" name="employee_from">
						          <option value=" ">--Pilih--</option>
						          <option>INTERNAL</option>
						          <option>EKSTERNAL</option>
						        </select>
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="col-sm-3 control-label" for="reason_recommendation">
						        <span class="pull-left">
						          Alasan Rekomendasi
						        </span>
						      </label>
						      <div class="col-sm-6">
						        <textarea class="form-control" id="reason_recommendation" name="reason_recommendation"></textarea>
						      </div>
						    </div>
						  </div>
						</div>'
    	);

		$datas["example"] = json_encode($data);

    	// return response()->json($data);
        return view('master-content/ep-ptk', $datas);
    }
}
