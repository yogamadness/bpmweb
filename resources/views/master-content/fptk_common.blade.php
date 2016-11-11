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
            <option value="{{ $levJab->description_code }}">{{ $levJab->description }}</option>
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
      <div class="col-sm-4 col-xs-8">
        <input type="text" placeholder="Jumlah Kebutuhan" id="number_of_needs" class="form-control" name="number_of_needs">
      </div>
      <label class="col-sm-2 col-xs-4 control-label">
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
      <label class="col-sm-4 col-xs-12 control-label" for="start_contract">
        <span class="pull-left">
          Masa Kontrak
        </span>
      </label>
      <div class="col-sm-4 col-xs-6">
        <div class="input-group date" id="start_contract">
          <input type="text" class="form-control" id="start_contract" placeholder="Mulai" name="start_contract"> 
          <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
          </span>
        </div>
      </div>
      <div class="col-sm-4 col-xs-6">
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
      <label class="col-sm-4 col-xs-12 control-label" for="departemen">
        <span class="pull-left">
          Usia (Tahun)
        </span>
      </label>
      <div class="col-sm-4 col-xs-6">
        <input type="text" placeholder="Batas Min" id="min_age" class="form-control" name="min_age"> 
      </div>
      <div class="col-sm-4 col-xs-6">
        <input type="text" placeholder="Batas Max" id="max_age" class="form-control" name="max_age">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-4 control-label" for="experience">
        <span class="pull-left">
          Pengalaman
        </span>
      </label>
      <div class="col-sm-4">
        <input type="text" placeholder="Pengalaman" id="experience" class="form-control" class="experience">
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
        <textarea class="form-control" id="skill" name="skill"></textarea>
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

@section('javascript-form')
<script type="text/javascript">
    $(document).ready(function(){
        /*Local Storage*/
        if (localStorage) {
          setStorage();
          getStorage();
        } else {
          alert("not Support");
        }
    });

      function setStorage(){
        $('#company').keyup(function(){
          var company = $('#company').val();
          localStorage.setItem('company', company);
        });

        $('#ba_code').keyup(function(){
          var ba_code = $('#ba_code').val();
          localStorage.setItem('ba_code', ba_code);
        });

        $('#department').keyup(function(){
          var department = $('#department').val();
          localStorage.setItem('department', department);
        });

        $('#number_of_needs').keyup(function(){
          var number_of_needs = $('#number_of_needs').val();
          localStorage.setItem('number_of_needs', number_of_needs);
        });

        /*On Change*/
        /*$('#needs_date').keyup(function(){
          var needs_date = $('#needs_date').val();
          localStorage.setItem('needs_date', needs_date);
        });*/

        $('#head').keyup(function(){
          var head = $('#head').val();
          localStorage.setItem('head', head);
        });

        /*On Change*/
        /*$('#emp_status').keyup(function(){
          var emp_status = $('#emp_status').val();
          localStorage.setItem('emp_status', emp_status);
        });*/

        $('#start_contract').keyup(function(){
          var start_contract = $('#start_contract').val();
          localStorage.setItem('start_contract', start_contract);
        });

        $('#end_contract').keyup(function(){
          var end_contract = $('#end_contract').val();
          localStorage.setItem('end_contract', end_contract);
        });

        /*On Change*/
        /*$('#gender').keyup(function(){
          var gender = $('#gender').val();
          localStorage.setItem('gender', gender);
        });

        $('#last_education').keyup(function(){
          var last_education = $('#last_education').val();
          localStorage.setItem('last_education', last_education);
        });*/

        $('#facult').keyup(function(){
          var facult = $('#facult').val();
          localStorage.setItem('facult', facult);
        });

        $('#skill').keyup(function(){
          var skill = $('#skill').val();
          localStorage.setItem('skill', skill);
        });

        $('#spec_requirment').keyup(function(){
          var spec_requirment = $('#spec_requirment').val();
          localStorage.setItem('spec_requirment', spec_requirment);
        });

        /*On Change*/
        /*$('#min_age').keyup(function(){
          var min_age = $('#min_age').val();
          localStorage.setItem('min_age', min_age);
        });*/

        /*On Change*/
        /*$('#max_age').keyup(function(){
          var max_age = $('#max_age').val();
          localStorage.setItem('max_age', max_age);
        });*/

        $('#experience').keyup(function(){
          var experience = $('#experience').val();
          localStorage.setItem('experience', experience);
        });
      }

      function getStorage(){
        $('#company').val(localStorage.getItem('company'));
        $('#ba_code').val(localStorage.getItem('ba_code'));
        $('#department').val(localStorage.getItem('department'));
        $('#number_of_needs').val(localStorage.getItem('number_of_needs'));
        $('#needs_date').val(localStorage.getItem('needs_date'));
        $('#head').val(localStorage.getItem('head'));
        $('#emp_status').val(localStorage.getItem('emp_status'));
        $('#start_contract').val(localStorage.getItem('start_contract'));
        $('#end_contract').val(localStorage.getItem('end_contract'));
        $('#gender').val(localStorage.getItem('gender'));
        $('#last_education').val(localStorage.getItem('last_education'));
        $('#facult').val(localStorage.getItem('facult'));
        $('#skill').val(localStorage.getItem('skill'));
        $('#spec_requirment').val(localStorage.getItem('spec_requirment'));
        $('#min_age').val(localStorage.getItem('min_age'));
        $('#max_age').val(localStorage.getItem('max_age'));
        $('#experience').val(localStorage.getItem('experience'));
      }
</script>
@endsection