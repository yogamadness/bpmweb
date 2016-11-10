@extends('layouts-master.master')

@section('tittle', 'FPTK')

@section('cascanding')
<link rel="stylesheet" href="dist/plugins/datetimepicker/css/bootstrap-datetimepicker.min.css">
@endsection()

@section('content')
<div class="row">
  <div class="col-sm-12">
    <h1>FORMULIR PERMINTAAN TENAGA KERJA {{ Session::get('area_code') }}
    </h1>
    
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-success"  id="formtambah">
      <!-- Permintaan Tenaga Kerja -->
      <div class="box-header with-border">
        <h3 class="box-title"><b>Permintaan Tenaga Kerja</b></h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <form method="post" enctype="multipart/form-data" id="formFptk" class="form-horizontal" role="form">
          @include('master-content.ep-ptk-top')
          
          <!-- Berdasarkan TipeTpk -->
          <!-- {{ $example }} -->
          <!-- {{ Session::get('role_code')->all() }} -->

          @include('master-content.ep-ptk-down')

        </form>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
      <button class="btn btn-default" type="submit">Batal</button>
      <button class="btn btn-success pull-right" type="submit" id="ajukan">Ajukan</button>
      </div><!-- /.box-footer -->
    </div>
  </div>
</div>
@endsection

@section('javascript-form')
<!-- bootstrap datepicker -->
<script src="dist/plugins/datetimepicker/js/moment.min.js"></script>
<script src="dist/plugins/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script src="dist/plugins/Typeahead-master/bootstrap3-typeahead.js"></script>

<script type="text/javascript">
  $(function(){
    var date = new Date();
    var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
    $('#datetimepicker1').datetimepicker({
        format: 'DD-MMM-YYYY',
        defaultDate: new Date(),
        minDate: today
    });
    $('#request_date').datetimepicker({
        format: 'DD-MMM-YYYY',
        defaultDate: new Date(),
        minDate: today
    });

    $('#start_contract').datetimepicker({
        format: 'DD-MMM-YYYY',
        defaultDate: new Date(),
        minDate: today
    });

    $('#end_contract').datetimepicker({
        format: 'DD-MMM-YYYY',
        defaultDate: new Date(),
        minDate: today
    });

    //Autocomplate
    $('#jabatan').typeahead({source:[{id: "Penghasil", name: "Penghasil"}, 
                {id: "Pemanen", name: "Pemanen"},
                {id: "Mandor", name: "Mandor"}], 
                autoSelect: true});

    $('#company').typeahead({source:[{id: "GAWI", name: "GAWI"}, 
                {id: "ESTATE", name: "ESTATE"}], 
                autoSelect: true});

    $('#ba_code').typeahead({source:[{id: "BA", name: "BA"}, 
                {id: "BO", name: "BO"}], 
                autoSelect: true});

    $('#department').typeahead({source:[{id: "PGA", name: "PGA"}, 
                {id: "KTU", name: "KTU"}], 
                autoSelect: true});

    $('#head').typeahead({source:[{id: "SM", name: "SM"}, 
                {id: "EM", name: "EM"}], 
                autoSelect: true});
  });      

</script>
@endsection()