@extends('layouts-master.master')

@section('title', 'Perubahan Data Karyawan ')

@section('cascanding')
<link rel="stylesheet" href="dist/plugins/datetimepicker/css/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" type="text/css" href="dist/Parsley.js-2.6.0/src/parsley.css">
@endsection()

@section('content')
<div class="row">
  <div class="col-sm-12">
    <h1>FORMULIR PERUBAHAN TENAGA KERJA {{ Session::get('area_code') }}
    </h1>
    
  </div>
</div>
<div class="row">
    <div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="nik_nasional">
                Nik Nasional
              </label>
              <input type="input" class="form-control" id="nik_nasional" />
            </div>
            <div class="form-group"> 
              <label for="Nik Sap">
                Nik Sap
              </label>
              <input type="input" class="form-control" id="nik_sap" />
            </div>
            <div class="form-group"> 
              <label for="Nama Karyawan">
                Nama Karyawan
              </label>
              <input type="input" class="form-control" id="nama_karyawan" />
            </div>
            <div class="form-group"> 
              <label for="Jabatan">
                Jabatan
              </label>
              <input type="input" class="form-control" id="jabatan" />
            </div>
            <div class="form-group"> 
              <label for="tanggal">
                 Tanggal Aktif Kerja
              </label>
              <input type="date" class="form-control" id="tanggal_aktif" />
            </div>
        </div>
        <div class="col-md-6">
          <img alt="Foto" src="http://lorempixel.com/140/140/" class="img-thumbnail" /> 
          <span class="label label-default">Ganti Foto</span>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-3">
               <span class="label label-default">Ganti Ktp</span>
            </div>
            <div class="col-md-3">
               <span class="label label-default">Ganti Kk</span>
            </div>
            <div class="col-md-3">
               <span class="label label-default">Ganti Npwp</span>
            </div>
            <div class="col-md-3">
               <span class="label label-default">Ganti Sim</span>
            </div>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-6">
              <form role="form">
                <div class="form-group">
                   
                  <label for="no_ktp">
                    No KTP
                  </label>
                  <input type="input" class="form-control" id="no_ktp" />
                </div>
                <div class="form-group">
                  <label for="no_npwp">
                     No Npwp
                  </label>
                  <input type="input" class="form-control" id="no_npwp" />
                </div>
                <div class="form-group">
                  <label for="mama">
                     Nama Gadis Ibu Kandung
                  </label>
                  <input type="input" class="form-control" id="mama" />
                </div>
                <div class="form-group">
                  <label for="nama_lengkap">
                     Nama Lengkap
                  </label>
                  <input type="input" class="form-control" id="nama_lengkap" />
                </div>
                <div class="form-group">
                  <label for="agama">
                     Agama
                  </label>
                  <input type="input" class="form-control" id="agama" />
                </div>

                <div class="form-group">
                  <label for="tempat_lahir">
                    Tempat Lahir
                  </label>
                  <input type="input" class="form-control" id="tempat_lahir"/>
                </div>

                <div class="form-group">
                  <label for="jenis_kelamin">
                    Jenis Kelamin
                  </label>
                  
                   <input  id = "sex" type="radio" name ="gender"  value ="L"/> L
                   <input id = "sex" type="radio" name="gender"    value="P"/>   P  
                </div>

              </form>
            </div>
            <div class="col-md-6">
              <form role="form">
                <div class="form-group">
                   
                  <label for="exampleInputEmail1">
                    Email address
                  </label>
                  <input type="email" class="form-control" id="exampleInputEmail1" />
                </div>
                <div class="form-group">
                   
                  <label for="exampleInputPassword1">
                    Password
                  </label>
                  <input type="password" class="form-control" id="exampleInputPassword1" />
                </div>
                <div class="form-group">
                   
                  <label for="exampleInputFile">
                    File input
                  </label>
                  <input type="file" id="exampleInputFile" />
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
              </form>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
               <span class="label label-default">Label</span>
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
              <button type="button" class="btn btn-default">
                Default
              </button> <span class="label label-default">Label</span>
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
              <button type="button" class="btn btn-default">
                Default
              </button> <span class="label label-default">Label</span>
              <div class="row">
                <div class="col-md-6">
                  <form role="form">
                    <div class="form-group">
                       
                      <label for="exampleInputEmail1">
                        Email address
                      </label>
                      <input type="email" class="form-control" id="exampleInputEmail1" />
                    </div>
                    <div class="form-group">
                       
                      <label for="exampleInputPassword1">
                        Password
                      </label>
                      <input type="password" class="form-control" id="exampleInputPassword1" />
                    </div>
                    <div class="form-group">
                       
                      <label for="exampleInputFile">
                        File input
                      </label>
                      <input type="file" id="exampleInputFile" />
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
                  </form>
                </div>
                <div class="col-md-6">
                  <form role="form">
                    <div class="form-group">
                       
                      <label for="exampleInputEmail1">
                        Email address
                      </label>
                      <input type="email" class="form-control" id="exampleInputEmail1" />
                    </div>
                    <div class="form-group">
                       
                      <label for="exampleInputPassword1">
                        Password
                      </label>
                      <input type="password" class="form-control" id="exampleInputPassword1" />
                    </div>
                    <div class="form-group">
                       
                      <label for="exampleInputFile">
                        File input
                      </label>
                      <input type="file" id="exampleInputFile" />
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
                  </form>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                   
                  <button type="button" class="btn btn-sm">
                    Default
                  </button>
                </div>
                <div class="col-md-4">
                   
                  <button type="button" class="btn btn-sm">
                    Default
                  </button>
                </div>
                <div class="col-md-4">
                   
                  <button type="button" class="btn btn-sm">
                    Default
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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