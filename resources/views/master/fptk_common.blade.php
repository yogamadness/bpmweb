<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      <label class="col-sm-6 control-label" for="levelJabatan">
        <span class="pull-left" style="">
          Level Jabatan Yang Dibutuhkan
        </span>
      </label>
      <div class="col-sm-6">
        <select class="form-control" id="level_jbt" name="level_jbt">
          <option value=" ">--Pilih--</option>
          @foreach($levelJabatan as $levJab)
            <option>{{ $levJab->description }}</option>
          @endforeach
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-6 control-label" for="">
        <span class="pull-left">
          Jabatan Yang Dibutuhkan
        </span>
      </label>
      <div class="col-sm-6">
        <input type="text" placeholder="Jabatan" id="jabatan" class="form-control" name="" data-provide="typeahead" autocomplete="off">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-6 control-label" for="company">
        <span class="pull-left">
          Perusahaan
        </span>
      </label>
      <div class="col-sm-6">
        <input type="text" placeholder="Perusahaan" id="company" class="form-control" name="company">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-6 control-label" for="ba_code">
        <span class="pull-left">
          Bisnis Area/Divisi
        </span>
      </label>
      <div class="col-sm-6">
        <input type="text" placeholder="Bisnis Area" id="ba_code" class="form-control" name="ba_code">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-6 control-label" for="department">
        <span class="pull-left">
          Departement
        </span>
      </label>
      <div class="col-sm-6">
        <input type="text" placeholder="Departemen" id="department" class="form-control" name="department">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-6 control-label" for="number_of_needs">
        <span class="pull-left">
          Jumlah Kebutuhan
        </span>
      </label>
      <div class="col-sm-4">
        <input type="text" placeholder="Jumlah Kebutuhan" id="number_of_needs" class="form-control" name="number_of_needs">
      </div>
      <label class="col-sm-2 control-label">
        <span class="pull-left">
          Orang
        </span>
      </label>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label class="col-sm-4 control-label" for="request_date">
        <span class="pull-left">
          Tgl. Permintaaan
        </span>
      </label>
      <div class="col-sm-8">
        <input type="text" placeholder="DD-MMM-YYYY" id="request_date" class="form-control" name="request_date" readonly>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-4 control-label" for="needs_date">
        <span class="pull-left">
          Tgl. Dibutuhkan
        </span>
      </label>
      <div class="col-sm-8">
        <div class="input-group date" id="datetimepicker1">
          <input type="text" class="form-control" id="needs_date" name="needs_date"> 
          <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
          </span>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-4 control-label" for="head">
        <span class="pull-left">
          Atasan Langsung
        </span>
      </label>
      <div class="col-sm-8">
        <input type="text" placeholder="Atasan Langsung" id="head" class="form-control" name="head">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-4 control-label" for="emp_status">
        <span class="pull-left">
          Status Karyawan
        </span>
      </label>
      <div class="col-sm-8">
        <select class="form-control" name="emp_status" id="emp_status">
          <option value=" ">--Pilih--</option>
            
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-4 control-label" for="start_contract">
        <span class="pull-left">
          Masa Kontrak
        </span>
      </label>
      <div class="col-sm-4">
        <div class="input-group date" id="start_contract">
          <input type="text" class="form-control" id="start_contract" placeholder="Mulai" name="start_contract"> 
          <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
          </span>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="input-group date" id="end_contract">
          <input type="text" class="form-control" id="end_contract" placeholder="Berakhir" name="end_contract"> 
          <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="input-group">
  <h4>
    <i>Kualifikasi Jabatan</i>
  </h4>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      <label class="col-sm-6 control-label" for="gender">
        <span class="pull-left">
          Jenis Kelamin
        </span>
      </label>
      <div class="col-sm-6">
        <select class="form-control" id="gender" name="gender">
          <option>--Pilih--</option>
          @foreach($gender as $genders)
            <option>{{ $genders->description }}</option>
          @endforeach
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-6 control-label" for="last_education">
        <span class="pull-left">
          Pendidikan Terakir
        </span>
      </label>
      <div class="col-sm-6">
        <select class="form-control" id="last_education" name="last_education">
          <option>--Pilih--</option>
          <option>SMA/SMK</option>
          <option>Perguruan Tinggi</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-6 control-label" for="facult">
        <span class="pull-left">
          Fakultas/Jurusan
        </span>
      </label>
      <div class="col-sm-6">
        <input type="text" placeholder="Fakultas/Jurusan" id="facult" class="form-control" name="facult">
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label class="col-sm-4 control-label" for="departemen">
        <span class="pull-left">
          Usia (Tahun)
        </span>
      </label>
      <div class="col-sm-4">
        <input type="text" placeholder="Batas Min" id="" class="form-control" name="">
      </div>
      <div class="col-sm-4">
        <input type="text" placeholder="Batas Max" id="" class="form-control" name="">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-4 control-label" for="skill">
        <span class="pull-left">
          Pengalaman
        </span>
      </label>
      <div class="col-sm-4">
        <input type="text" placeholder="Pengalaman" id="skill" class="form-control" class="skill">
      </div>
      <label class="col-sm-2 control-label">
        <span class="pull-left">
          Tahun
        </span>
      </label>
    </div>
  </div>
  <div class="col-md-12">
    <div class="form-group">
      <label class="col-sm-3 control-label" for="jabatan">
        <span class="pull-left">
          Keterampilan
        </span>
      </label>
      <div class="col-sm-6">
        <textarea class="form-control" id="keterampilan" name="keterampilan"></textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label" for="spec_requirment">
        <span class="pull-left">
          Syarat Khusus
        </span>
      </label>
      <div class="col-sm-6">
        <textarea class="form-control" id="spec_requirment" name="spec_requirment"></textarea>
      </div>
    </div>
  </div>
</div>