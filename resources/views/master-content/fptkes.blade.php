<div class="input-group">
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
        <select class="form-control" id="reason_request" name="reason_request">
          <option value=" ">--Pilih--</option>
          @foreach($alasanPermintaan as $alasanPer)
            <option>{{ $alasanPer->description }}</option>
          @endforeach
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label" for="employee_before">
        <span class="pull-left">
          Nama Karyana yang Digantikan
        </span>
      </label>
        <div class="col-sm-5">
	        <input type="text" placeholder="Fakultas/Jurusan" id="employee_before" name="employee_before" class="form-control">
	    </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label" for="description">
        <span class="pull-left">
          Keterangan
        </span>
      </label>
      <div class="col-sm-6">
        <textarea class="form-control" id="description" name="description"></textarea>
      </div>
    </div>
  </div>
</div>
<hr>
<div class="input-group">
  <h4>
    <b>Data Pendukung (data bulan MM-YYYY)</b>
  </h4>
</div>
<div class="input-group">
  <h4>
    <i>Profile Bisnis Area</i>
  </h4>
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
		    <label class="col-sm-6 control-label" for="ha_tanam">
		        <span class="pull-left">
		          	Ha Tanam
		        </span>
		      </label>
		      <div class="col-sm-4">
		        <input type="text" placeholder="Ha" id="ha_tanam" name="ha_tanam" class="form-control">
		      </div>
		      <label class="col-sm-2 control-label">
		        <span class="pull-left">
		          Ha
		        </span>
		    </label>
		</div>
		<div class="form-group">
		    <label class="col-sm-6 control-label" for="ha_tbm">
		        <span class="pull-left">
		          	Ha TBM
		        </span>
		    </label>
		    <div class="col-sm-4">
		        <input type="text" placeholder="Ha" id="ha_tbm" name="ha_tbm" class="form-control">
		    </div>
		    <label class="col-sm-2 control-label">
		        <span class="pull-left">
		          Ha
		        </span>
		    </label>
		</div>
		<div class="form-group">
		    <label class="col-sm-6 control-label" for="ha_tm">
		        <span class="pull-left">
		          	Ha TM
		        </span>
		    </label>
		    <div class="col-sm-4">
		        <input type="text" placeholder="Ha" id="ha_tm" name="ha_tm" class="form-control">
		    </div>
		    <label class="col-sm-2 control-label">
		        <span class="pull-left">
		          Ha
		        </span>
		    </label>
		</div>
	</div>
</div>
<hr>
<div class="input-group">
  <h4>
    <i>Profile Man Power</i>
  </h4>
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
		    <label class="col-sm-6 control-label" for="mpe">
		        <span class="pull-left">
		          	MPE
		        </span>
		    </label>
		      <div class="col-sm-4">
		        <input type="text" placeholder="" id="mpe" name="mpe" class="form-control">
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
      <label class="col-sm-3 control-label" for="candidate_recommended">
        <span class="pull-left">
          Ada Calon yaang Disarakan ?
        </span>
      </label>
      <div class="col-sm-3">
        <select class="form-control" id="candidate_recommended" name="candidate_recommended">
          <option value=" ">--Pilih--</option>
          <option>YA</option>
          <option>TIDAK</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label" for="employee_replaced">
        <span class="pull-left">
          Asal Karyawan
        </span>
      </label>
      <div class="col-sm-3">
        <select class="form-control" id="employee_replaced" name="employee_replaced">
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
</div>