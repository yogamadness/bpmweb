@extends('layouts-master.master')

@section('tittle', 'Input Karyawan Baru')

@section('cascanding')
<link rel="stylesheet" href="dist/plugins/datetimepicker/css/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" type="text/css" href="dist/Parsley.js-2.6.0/src/parsley.css">
@endsection()

@section('content')
<div class="row">
  <div class="col-sm-12">
    <h1>FORMULIR PENGINPUTAN TENAGA KERJA {{ Session::get('area_code') }}
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
        <form enctype="multipart/form-data" id="formFptk" class="form-horizontal" name="formFptk">
          <input type="hidden" name="tipePtk" id="tipePtk">
         
          <div class="fptk">

          </div>
         
        </form>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
      <button class="btn btn-default" type="submit">Batal</button>
      <button class="btn btn-success pull-right" type="button" id="ajukan">Ajukan</button>
      </div><!-- /.box-footer -->
    </div>
  </div>
</div>
@endsection

@push('js')
<!-- bootstrap datepicker -->
<script src="dist/plugins/datetimepicker/js/moment.min.js"></script>
<script src="dist/plugins/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script src="dist/plugins/Typeahead-master/bootstrap3-typeahead.js"></script>
<script src="dist/plugins/select2/select2.full.js"></script>
<script type="text/javascript" src="dist/plugins/parsley/js/parsley-2.1.2.min.js"></script>
<script src="dist/plugins/parsley/js/id.js"></script>

<script type="text/javascript">
  $('#ajukan').click(function(){
    // $('#formFptk').parsley().validate("first");
    // if ($('#formFptk').parsley().isValid("first")) {
    //   $('#formFptk').parsley().destroy();
    //   console.log('valid');
    // } else {
    //   console.log('not valid');
    // }

    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    var formdata = new FormData();

    var ins = $("#lampiran");
    // var count = ins.files.length;
debugger;
    console.log(ins.length);
    for(var x=0;x<ins;x++){
      // formdata.append);
      console.log(document.getElementByName("lampiran").files[x]+'-'+x);
    }

    // console.log(formdata);

    // var data = $("#formFptk").serializeArray();
    // $.each(data,function(key,input){
    //       formdata.append(input.name,input.value);
    // });

    // $.ajax({
    //   url   : 'fptk/save',
    //   method  : 'post',
    //   data  : formdata,
    //   contentType: false,
    //   processData: false,
    //   success : function(data) {

    //   },
    //   error   : function() {
    //     console.log('gagal');
    //   }
    // });
    
    
  }); 

  //include form
  $('#jbt').change(function(){
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
        $.post('fptk', { tipePtk: 'estateNonStaffPemanen' })
          .done(function(data){
            $('.fptk').html(data);
            $('#tipePtk').val('estateNonStaffPemanen');
        });
        
      }
      if(cek && level == 'ENS'){
        $.post('fptkensfm')
          .done(function(data){
            $('.fptk').html(data);
            $('#tipePtk').val('estateNonStaffMandor');
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
          $('#tipePtk').val('estateNonStaffRawat');
      });
      
    }
    if(level == 'EST'){
      $.post('fptkes')
        .done(function(data){
          $('.fptk').html(data);
          $('#tipePtk').val('estateStaff');
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
      $.post('fptkro')
        .done(function(data){
          $('.fptk').html(data);
          $('#tipePtk').val('regionalOffice');
      });      
    }
  });

  $("#plus").click(function(){
    $("#lampiran").clone().appendTo("#file");
  });
      

</script>
@endpush()