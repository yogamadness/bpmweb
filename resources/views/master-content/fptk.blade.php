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
          <input type="hidden" name="tipePtk" id="tipePtk">
          @include('master-content.fptk_common')
          <div class="fptk">

          </div>
          <!-- @include('master.fptkensp') -->
          <!-- @include('master.fptkensr') -->
          <!-- @include('master.fptkensfm') -->
          <!-- @include('master.fptkes') -->
          <!-- @include('master.fptkmns') -->
          <!-- @include('master.fptkms') -->
          @include('master-content.fptk_common_bawah')
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
        minDate: today
    });

    $('#end_contract').datetimepicker({
        format: 'DD-MMM-YYYY',
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

  $('#ajukan').click(function(){
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    var ofile = document.getElementById("lampiran").files[0];
    var formdata = new FormData();
    formdata.append("lampiran",ofile);

    var data = $("#formFptk").serializeArray();
    $.each(data,function(key,input){
          formdata.append(input.name,input.value);
    });

    $.ajax({
      url   : 'fptk/save',
      method  : 'post',
      data  : formdata,
      contentType: false,
      processData: false,
      success : function(data) {

      },
      error   : function() {
        console.log('gagal');
      }
    });
  }); 

  //include form
  $('#jabatan').change(function(){
    // $('#fptk').html().remove();
    var level = $('#level_jbt').val();
    var value = this.value;
    var low = value.toLowerCase();
    var cek = low.match(/mandor/);
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      if(low == 'pemanen' && level == 'ENS'){
        $.post('fptk', { tipePtk: low })
          .done(function(data){
            $('.fptk').html(data);
        });
        
      }
      if(cek && level == 'ENS'){
        $.post('fptk', { tipePtk: low })
          .done(function(data){
            $('.fptk').html(data);
        });
        
      }
  });

  $('#level_jbt').change(function(){
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    var level = $('#level_jbt').val();
    if(level == 'ENS'){
      $.post('fptkensr')
        .done(function(data){
          $('.fptk').html(data);
      });
      
    }
    if(level == 'EST'){
      $.post('fptkes')
        .done(function(data){
          $('.fptk').html(data);
          $('#tipePtk').val('staff');
      });      
    }
    if(level == 'MST'){
      $.post('fptkms')
        .done(function(data){
          $('.fptk').html(data);
          $('#tipePtk').val('millStaff');
      });
      
    }
    if(level == 'MNS'){
      $.post('fptkmns')
        .done(function(data){
          $('.fptk').html(data);
          $('#tipePtk').val('millNonStaff');
      });      
    }
    if(level == 'ROS'){
      $.post('fptkms')
        .done(function(data){
          $('.fptk').html(data);
          $('#tipePtk').val('regionalOffice');
      });      
    }
  });
      

</script>
@endsection()