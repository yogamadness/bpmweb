@extends('layouts-master.master')

@section('title', 'Perubahan Karyawan')

@section('cascanding')
<link rel="stylesheet" href="{{ URL::asset('dist/plugins/datetimepicker/css/bootstrap-datetimepicker.min.css' )}}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('dist/Parsley.js-2.6.0/src/parsley.css') }}">
@endsection()

@section('content')
<div class="row">
  <div class="col-sm-12">
    <h1>FORMULIR PERUBAHAN TENAGA KERJA
    </h1>
    
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-success"  id="formtambah">
      <!-- Permintaan Tenaga Kerja -->
      <div class="box-header with-border">
        
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <form enctype="multipart/form-data" id="formFptk" class="form-horizontal" name="formFptk">
          <input type="hidden" name="tipePtk" id="tipePtk">
         
          <div class="fptk">

          </div>
         
      <div class="container-fluid">
  <div class="row">
        @include('recruitment.editheader');

      <div class="row">
            <div class="col-md-12">
                <hr>
            </div>
      </div>

      <div class="row">
        <div class="col-md-12">
            @include('recruitment.editupload');
          <div class="row">
            <div class="col-md-12">
                <hr>
            </div>
          </div>


         <div class="row">
            <div class="col-md-6">
               <span class="label label-primary">Lama</span>
            </div>
            <div class="col-md-6">
               <span class="label label-primary">Baru</span>
            </div>
         </div>
          <div class="row">
            <div class="col-md-12">
                <hr>
            </div>
          </div>

          <div class="row">
              @include('recruitment.editlama')
              @include('recruitment.editbaru')
          </div> 
        </div>
          <div class="row">
            <div class="col-md-12">
                <hr>
            </div>
          </div>

          <span class="label label-default">Susunan Keluarga</span>

          @include('recruitment.editkluarga')
          
          <span class="label label-default">Riwayat Pendukung</span>

          @include('recruitment.editriwayat')
          
        </div>
      </div>

          <div class="row">
            <div class="col-md-12">
                <hr>
            </div>
          </div>

      <div class="row">
        <div class="col-md-12">
           <span class="label label-default">Data Pendukung</span>

           <div class="row">
            <div class="col-md-12">
                <hr>
            </div>
          </div>

          @include('recruitment.editpendukung')
          <hr>

          <div class="row">
                <div class="col-md-4">
                    <span><a href="">Lihat Data Pendukung 1</a></span>
                    <span><a href="">Hapus Data</a></span>
                    <span><a href="">Tambah Data Pendukung 1</a></span>
                </div>
                <div class="col-md-4">
                   
                </div>
                <div class="col-md-4">
                   
                </div>
          </div>
            <hr>

           
          <div class="row">
           <div class="col-md-12">
            <span class="label label-default">Histori Transaksi</span>
            <hr>
             @include('recruitment.edithistori') 
          </div>

           <div class="form-group">
                    <label for="no_kk" class="col-sm-6">
                      Tambah Catatan
                    </label>

                    <div class="col-sm-10">
                        <textarea id="alamat_emp_br" class="form-control" rows="3"  /></textarea>
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
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
      <div class="row">
          <div class="col-md-12">
              
                <button class="btn btn-danger" type="submit" id="tolak">Tolak</button>
              

             
                  <button class="btn btn-success" type="submit" id="ajukan">Ajukan</button>
              
              
              
                  <button class="btn btn-primary " type="submit" id="kembali">Kembali</button>
              

              
                  <button class="btn btn-info " type="submit" id="tanya">tanya</button>
              

              
                  <button class="btn btn-success " type="submit" id="kirim">kirim</button>
              
            
          </div>
      </div>
      </div><!-- /.box-footer -->
    </div>
  </div>
</div>
</form>
@endsection

@push('js')
<!-- bootstrap datepicker -->
<script src="{{ URL::asset('dist/plugins/datetimepicker/js/moment.min.js') }}"></script>
<script src="{{ URL::asset('dist/plugins/datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ URL::asset('dist/plugins/Typeahead-master/bootstrap3-typeahead.js') }}"></script>
<script src="{{ URL::asset('dist/plugins/select2/select2.full.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('dist/plugins/parsley/js/parsley-2.1.2.min.js') }}"></script>
<script src="{{ URL::asset('dist/plugins/parsley/js/id.js') }}"></script>

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