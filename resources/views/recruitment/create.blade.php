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
         <div class="container-fluid">

  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-6">

            <div class="form-group">
               
              <label for="no_ptk">
                No. PTK
              </label>
              <input class="form-control" id="no_ptk" type="text" />
            </div>
            <div class="form-group">
               
              <label for="jod">
                Jumlah orang dibutuhkan
              </label>
              <input class="form-control" id="jod" type="text" /> Orang
            </div>
            <div class="form-group">
               
              <label for="jabatan">
                Jabatan
              </label>
              <input class="form-control" id="jabatan" type="text" />
            </div>

            <div class="form-group">
               
              <label for="jsod">
                Jumlah sisa orang dibutuhkan
              </label>
              <input class="form-control" id="jsod" type="text" /> Orang
            </div>

             <div class="form-group">
               
              <label for="tak">
                Tanggal aktif kerja
              </label>
              <input class="form-control" id="tak" type="text" /> Orang
            </div>

            <div class="form-group">
               
              <label for="stat_karyawan">
                Status Karyawan
              </label>
              <input class="form-control" id="stat_karyawan" type="text" /> Orang
            </div>
        </div>
        <div class="col-md-6">
          <img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/" class="img-thumbnail" />
          + tambah foto
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/" class="img-rounded" />
          + tambah ktp
        </div>
        <div class="col-md-3">
          <img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/" class="img-rounded" />
          + tambah kk
        </div>
        <div class="col-md-3">
          <img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/" class="img-rounded" />
          + tambah npwp
        </div>
        <div class="col-md-3">
          <img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/" class="img-rounded" />
          + tambah sim
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">
                No. KTP*
              </label>
              <div class="col-sm-10">
                <input class="form-control" id="inputEmail3" type="email" />
              </div>
            </div>
            <div class="form-group">
               
              <label for="inputPassword3" class="col-sm-2 control-label">
                Password
              </label>
              <div class="col-sm-10">
                <input class="form-control" id="inputPassword3" type="password" />
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                   
                  <label>
                    <input type="checkbox" /> Remember me
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                 
                <button type="submit" class="btn btn-default">
                  Sign in
                </button>
              </div>
            </div>

        </div>
        <div class="col-md-6">

            <div class="form-group">
               
              <label for="inputEmail3" class="col-sm-2 control-label">
                Email
              </label>
              <div class="col-sm-10">
                <input class="form-control" id="inputEmail3" type="email" />
              </div>
            </div>
            <div class="form-group">
               
              <label for="inputPassword3" class="col-sm-2 control-label">
                Password
              </label>
              <div class="col-sm-10">
                <input class="form-control" id="inputPassword3" type="password" />
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                   
                  <label>
                    <input type="checkbox" /> Remember me
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                 
                <button type="submit" class="btn btn-default">
                  Sign in
                </button>
              </div>
            </div>

        </div>
      </div>
      <div class="row">
        <div class="col-md-12">

            <div class="form-group">
               
              <label for="inputEmail3" class="col-sm-2 control-label">
                Email
              </label>
              <div class="col-sm-10">
                <input class="form-control" id="inputEmail3" type="email" />
              </div>
            </div>
            <div class="form-group">
               
              <label for="inputPassword3" class="col-sm-2 control-label">
                Password
              </label>
              <div class="col-sm-10">
                <input class="form-control" id="inputPassword3" type="password" />
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                   
                  <label>
                    <input type="checkbox" /> Remember me
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                 
                <button type="submit" class="btn btn-default">
                  Sign in
                </button>
              </div>
            </div>

        </div>
      </div>
      <div class="row">
        <div class="col-md-6">

            <div class="form-group">
               
              <label for="inputEmail3" class="col-sm-2 control-label">
                Email
              </label>
              <div class="col-sm-10">
                <input class="form-control" id="inputEmail3" type="email" />
              </div>
            </div>
            <div class="form-group">
               
              <label for="inputPassword3" class="col-sm-2 control-label">
                Password
              </label>
              <div class="col-sm-10">
                <input class="form-control" id="inputPassword3" type="password" />
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                   
                  <label>
                    <input type="checkbox" /> Remember me
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                 
                <button type="submit" class="btn btn-default">
                  Sign in
                </button>
              </div>
            </div>

        </div>
        <div class="col-md-6">

            <div class="form-group">
               
              <label for="inputEmail3" class="col-sm-2 control-label">
                Email
              </label>
              <div class="col-sm-10">
                <input class="form-control" id="inputEmail3" type="email" />
              </div>
            </div>
            <div class="form-group">
               
              <label for="inputPassword3" class="col-sm-2 control-label">
                Password
              </label>
              <div class="col-sm-10">
                <input class="form-control" id="inputPassword3" type="password" />
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                   
                  <label>
                    <input type="checkbox" /> Remember me
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                 
                <button type="submit" class="btn btn-default">
                  Sign in
                </button>
              </div>
            </div>

        </div>
      </div>
      <div class="row">
        <div class="col-md-12">

            <div class="form-group">
               
              <label for="inputEmail3" class="col-sm-2 control-label">
                Email
              </label>
              <div class="col-sm-10">
                <input class="form-control" id="inputEmail3" type="email" />
              </div>
            </div>
            <div class="form-group">
               
              <label for="inputPassword3" class="col-sm-2 control-label">
                Password
              </label>
              <div class="col-sm-10">
                <input class="form-control" id="inputPassword3" type="password" />
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                   
                  <label>
                    <input type="checkbox" /> Remember me
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                 
                <button type="submit" class="btn btn-default">
                  Sign in
                </button>
              </div>
            </div>

        </div>
      </div>
      <div class="row">
        <div class="col-md-6">

            <div class="form-group">
               
              <label for="inputEmail3" class="col-sm-2 control-label">
                Email
              </label>
              <div class="col-sm-10">
                <input class="form-control" id="inputEmail3" type="email" />
              </div>
            </div>
            <div class="form-group">
               
              <label for="inputPassword3" class="col-sm-2 control-label">
                Password
              </label>
              <div class="col-sm-10">
                <input class="form-control" id="inputPassword3" type="password" />
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                   
                  <label>
                    <input type="checkbox" /> Remember me
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                 
                <button type="submit" class="btn btn-default">
                  Sign in
                </button>
              </div>
            </div>

        </div>
        <div class="col-md-6">

            <div class="form-group">
               
              <label for="inputEmail3" class="col-sm-2 control-label">
                Email
              </label>
              <div class="col-sm-10">
                <input class="form-control" id="inputEmail3" type="email" />
              </div>
            </div>
            <div class="form-group">
               
              <label for="inputPassword3" class="col-sm-2 control-label">
                Password
              </label>
              <div class="col-sm-10">
                <input class="form-control" id="inputPassword3" type="password" />
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                   
                  <label>
                    <input type="checkbox" /> Remember me
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                 
                <button type="submit" class="btn btn-default">
                  Sign in
                </button>
              </div>
            </div>

        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>
                  #
                </th>
                <th>
                  Product
                </th>
                <th>
                  Payment Taken
                </th>
                <th>
                  Status
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  1
                </td>
                <td>
                  TB - Monthly
                </td>
                <td>
                  01/04/2012
                </td>
                <td>
                  Default
                </td>
              </tr>
              <tr class="active">
                <td>
                  1
                </td>
                <td>
                  TB - Monthly
                </td>
                <td>
                  01/04/2012
                </td>
                <td>
                  Approved
                </td>
              </tr>
              <tr class="success">
                <td>
                  2
                </td>
                <td>
                  TB - Monthly
                </td>
                <td>
                  02/04/2012
                </td>
                <td>
                  Declined
                </td>
              </tr>
              <tr class="warning">
                <td>
                  3
                </td>
                <td>
                  TB - Monthly
                </td>
                <td>
                  03/04/2012
                </td>
                <td>
                  Pending
                </td>
              </tr>
              <tr class="danger">
                <td>
                  4
                </td>
                <td>
                  TB - Monthly
                </td>
                <td>
                  04/04/2012
                </td>
                <td>
                  Call in to confirm
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>
                  #
                </th>
                <th>
                  Product
                </th>
                <th>
                  Payment Taken
                </th>
                <th>
                  Status
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  1
                </td>
                <td>
                  TB - Monthly
                </td>
                <td>
                  01/04/2012
                </td>
                <td>
                  Default
                </td>
              </tr>
              <tr class="active">
                <td>
                  1
                </td>
                <td>
                  TB - Monthly
                </td>
                <td>
                  01/04/2012
                </td>
                <td>
                  Approved
                </td>
              </tr>
              <tr class="success">
                <td>
                  2
                </td>
                <td>
                  TB - Monthly
                </td>
                <td>
                  02/04/2012
                </td>
                <td>
                  Declined
                </td>
              </tr>
              <tr class="warning">
                <td>
                  3
                </td>
                <td>
                  TB - Monthly
                </td>
                <td>
                  03/04/2012
                </td>
                <td>
                  Pending
                </td>
              </tr>
              <tr class="danger">
                <td>
                  4
                </td>
                <td>
                  TB - Monthly
                </td>
                <td>
                  04/04/2012
                </td>
                <td>
                  Call in to confirm
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">

            <div class="form-group">
               
              <label for="inputEmail3" class="col-sm-2 control-label">
                Email
              </label>
              <div class="col-sm-10">
                <input class="form-control" id="inputEmail3" type="email" />
              </div>
            </div>
            <div class="form-group">
               
              <label for="inputPassword3" class="col-sm-2 control-label">
                Password
              </label>
              <div class="col-sm-10">
                <input class="form-control" id="inputPassword3" type="password" />
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                   
                  <label>
                    <input type="checkbox" /> Remember me
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                 
                <button type="submit" class="btn btn-default">
                  Sign in
                </button>
              </div>
            </div>

        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table table-condensed table-hover">
            <thead>
              <tr>
                <th>
                  #
                </th>
                <th>
                  Product
                </th>
                <th>
                  Payment Taken
                </th>
                <th>
                  Status
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  1
                </td>
                <td>
                  TB - Monthly
                </td>
                <td>
                  01/04/2012
                </td>
                <td>
                  Default
                </td>
              </tr>
              <tr class="active">
                <td>
                  1
                </td>
                <td>
                  TB - Monthly
                </td>
                <td>
                  01/04/2012
                </td>
                <td>
                  Approved
                </td>
              </tr>
              <tr class="success">
                <td>
                  2
                </td>
                <td>
                  TB - Monthly
                </td>
                <td>
                  02/04/2012
                </td>
                <td>
                  Declined
                </td>
              </tr>
              <tr class="warning">
                <td>
                  3
                </td>
                <td>
                  TB - Monthly
                </td>
                <td>
                  03/04/2012
                </td>
                <td>
                  Pending
                </td>
              </tr>
              <tr class="danger">
                <td>
                  4
                </td>
                <td>
                  TB - Monthly
                </td>
                <td>
                  04/04/2012
                </td>
                <td>
                  Call in to confirm
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">

            <div class="form-group">
               
              <label for="exampleInputEmail1">
                Email address
              </label>
              <input class="form-control" id="exampleInputEmail1" type="email" />
            </div>
            <div class="form-group">
               
              <label for="exampleInputPassword1">
                Password
              </label>
              <input class="form-control" id="exampleInputPassword1" type="password" />
            </div>
            <div class="form-group">
               
              <label for="exampleInputFile">
                File input
              </label>
              <input id="exampleInputFile" type="file" />
              <p class="help-block">
                Example block-level help text here.
              </p>
            </div>
            <div class="checkbox">
               
              <label>
                <input type="checkbox" /> Check me out
              </label>
            </div> 
            <button type="submit" class="btn btn-default">
              Submit
            </button>

        </div>
        <div class="col-md-4">

            <div class="form-group">
               
              <label for="exampleInputEmail1">
                Email address
              </label>
              <input class="form-control" id="exampleInputEmail1" type="email" />
            </div>
            <div class="form-group">
               
              <label for="exampleInputPassword1">
                Password
              </label>
              <input class="form-control" id="exampleInputPassword1" type="password" />
            </div>
            <div class="form-group">
               
              <label for="exampleInputFile">
                File input
              </label>
              <input id="exampleInputFile" type="file" />
              <p class="help-block">
                Example block-level help text here.
              </p>
            </div>
            <div class="checkbox">
               
              <label>
                <input type="checkbox" /> Check me out
              </label>
            </div> 
            <button type="submit" class="btn btn-default">
              Submit
            </button>

        </div>
      </div>
      <div class="row">
        <div class="col-md-12">

            <div class="form-group">
               
              <label for="inputEmail3" class="col-sm-2 control-label">
                Email
              </label>
              <div class="col-sm-10">
                <input class="form-control" id="inputEmail3" type="email" />
              </div>
            </div>
            <div class="form-group">
               
              <label for="inputPassword3" class="col-sm-2 control-label">
                Password
              </label>
              <div class="col-sm-10">
                <input class="form-control" id="inputPassword3" type="password" />
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                   
                  <label>
                    <input type="checkbox" /> Remember me
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                 
                <button type="submit" class="btn btn-default">
                  Sign in
                </button>
              </div>
            </div>

        </div>
      </div>
    </div>
  </div>
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
</div>m,    jmjswa
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