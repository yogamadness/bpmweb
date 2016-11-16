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
               
              <label for="no_ptk" class="col-sm-5 control-label" >
               <span class="pull-left">
                No. PTK
                </span>
              </label>
              <div class="col-sm-7">
                <select class="form-control" id="no_ptk" name="no_ptk" data-parsley-group="first" required=""/>
                </select>
              </div>
              
            </div>
            <div class="form-group">
               
              <label for="jod" class="col-sm-5 control-label" >
               <span class="pull-left">
                Jumlah orang dibutuhkan
                </span>
              </label>
              <div class="col-sm-5">
                <input class="form-control" id="jod" type="text" /> 
              </div>
              <label  class="col-sm-2 control-label">
               <span class="pull-left">
                Orang
                </span>
              </label>
            </div>
            <div class="form-group">
               
              <label for="jabatan" class="col-sm-5 control-label">
               <span class="pull-left">
                Jabatan
                </span>
              </label>
              <div class="col-sm-7">
                <input class="form-control" id="jabatan" type="text" />
              </div>
            </div>

            <div class="form-group">
               
              <label for="jsod" class="col-sm-5 control-label">
               <span class="pull-left">
                Jumlah sisa orang dibutuhkan
                </span>
              </label>
              <div class="col-sm-5">
                <input class="form-control" id="jsod" type="text" /> 
              </div>
              <label class="col-sm-2 control-label">
               <span class="pull-left">
                Orang
                </span>
              </label>
            </div>

             <div class="form-group">
               
              <label for="tak" class="col-sm-5 control-label">
               <span class="pull-left">
                Tanggal aktif kerja
                </span>
              </label>
              <div class="col-sm-7">
                <input class="form-control" id="tak" type="text" /> 
              </div>
            </div>

            <div class="form-group">
               
              <label for="stat_karyawan" class="col-sm-5 control-label">
               <span class="pull-left">
                Status Karyawan
                </span>
              </label>
              <div class="col-sm-7">
                <input class="form-control" id="stat_karyawan" type="text" /> 
              </div>
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
              <label for="no_ktp" class="col-sm-4 control-label">
               <span class="pull-left">
                No. KTP*
                </span>
              </label>
              <div class="col-sm-8">
                <input class="form-control" id="no_ktp" name="no_ktp" type="text" />
              </div>
            </div>
            <div class="form-group">
               
              <label for="no_npwp" class="col-sm-4 control-label">
               <span class="pull-left">
                No. NPWP
                </span>
              </label>
              <div class="col-sm-8">
                <input class="form-control" id="no_npwp" name="no_npwp"   />
              </div>
            </div>
            <div class="form-group">
              <label for="fullname" class="col-sm-4 control-label">
               <span class="pull-left">
                Nama Lengkap
                </span>
              </label>
              <div class="col-sm-8">
                <input class="form-control" id="fullname" name="fullname" type="text" />
              </div>
            </div>
            <div class="form-group">
               
              <label for="agama" class="col-sm-4 control-label">
               <span class="pull-left">
                Agama
                </span>
              </label>
              <div class="col-sm-8">
                <select class="form-control" id="agama" name="agama" data-parsley-group="first" required=""/>
                </select>
              </div>
            </div>
             <div class="form-group">
              <label for="plcob" class="col-sm-4 control-label">
               <span class="pull-left">
                Tempat Lahir
                </span>
              </label>
              <div class="col-sm-8">
                <input class="form-control" id="plcob" name="plcob" type="text" />
              </div>
            </div>
            <div class="form-group">
               
              <label for="no_sim" class="col-sm-4 control-label">
               <span class="pull-left">
                No. SIM
                </span>
              </label>
              <div class="col-sm-8">
                <input class="form-control" id="no_sim" name="no_sim"   />
              </div>
            </div>

        </div>
        <div class="col-md-6">
          <div class="form-group">
              <label for="sex" class="col-sm-4 control-label">
               <span class="pull-left">
                Jenis Kelamin
                </span>
              </label>
              <div class="col-sm-8">
                <input type="radio" name="sex" id="sex" value="L"> Laki-laki
                <input type="radio" name="sex" id="sex" value="P"> Perempuan
              </div>
            </div>
            <div class="form-group">
              <label for="blood" class="col-sm-4 control-label">
               <span class="pull-left">
                Golongan Darah
                </span>
              </label>
              <div class="col-sm-8">
                <select class="form-control" id="blood" name="blood" data-parsley-group="first" required=""/>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="zheight" class="col-sm-4 control-label">
               <span class="pull-left">
                Tinggi Badan
                </span>
              </label>
              <div class="col-sm-5">
                <input class="form-control" id="zheight" name="zheight" type="text" />
              </div>
              <label class="col-sm-3 control-label">
               <span class="pull-left">
                cm
                </span>
              </label>
            </div>
            <div class="form-group">
               
              <label for="zweight" class="col-sm-4 control-label">
               <span class="pull-left">
                Berat Badan
                </span>
              </label>
              <div class="col-sm-5">
                <input class="form-control" id="zweight" name="zweight"   />
              </div>
              <label class="col-sm-3 control-label">
               <span class="pull-left">
                kg
                </span>
              </label>
            </div>
             <div class="form-group">
              <label for="dteob" class="col-sm-4 control-label">
               <span class="pull-left">
                Tanggal Lahir
                </span>
              </label>
              <div class="col-sm-8">
              <div class="input-group date" id="datetimepicker1">
                <input type="text" class="form-control" id="dteob" name="dteob" data-parsley-group="first" required=""> 
                <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
                </span>
              </div>
              </div>
            </div>
        

        </div>
      </div>
<!--                        addresss ktp begin                            -->       
      <div class="row">
        <div class="col-md-12">

            <div class="form-group">
               
              <label for="addrs" class="col-sm-2 control-label">
               <span class="pull-left">
                Alamat sesuai KTP
                </span>
              </label>
              <div class="col-sm-10">
                <textarea class="form-control" id="addrs" name="addrs" data-parsley-group="first" required=""></textarea>
              </div>
            </div>
   

        </div>
      </div>
      <div class="row">
        <div class="col-md-7">
        <div class="col-md-3">
        </div>
        <div class="col-md-9">
            <div class="form-group">
               
              <label for="ktpkel" class="col-sm-4 control-label">
               <span class="pull-left">
                Kelurahan
                </span>
              </label>
              <div class="col-sm-8">
                <input class="form-control" id="ktpkel" name="ktpkel" type="text" />
              </div>
            </div>
            <div class="form-group">
              <label for="ktpkota" class="col-sm-4 control-label">
               <span class="pull-left">
                Kota
                </span>
              </label>
              <div class="col-sm-8">
                <input class="form-control" id="ktpkota" name="ktpkota" type="text" />
              </div>
            </div>
            
            <div class="form-group">
              <label for="ktptelp" class="col-sm-4 control-label">
               <span class="pull-left">
                No. Telepon
                </span>
              </label>
              <div class="col-sm-8">
                <input class="form-control" id="ktptelp" name="ktptelp" type="text" />
              </div>
            </div>

            </div>
        </div>
        <div class="col-md-5">
        <div class="col-md-11">
          <div class="form-group">
               
              <label for="ktpkec" class="col-sm-3 control-label">
               <span class="pull-left">
                Kecamatan
                </span>
              </label>
              <div class="col-sm-9">
                <input class="form-control" id="ktpkec" name="ktpkec" type="text" />
              </div>
            </div>
            <div class="form-group">
              <label for="ktpkpos" class="col-sm-3 control-label">
               <span class="pull-left">
                Kode Pos
                </span>
              </label>
              <div class="col-sm-9">
                <input class="form-control" id="ktpkpos" name="ktpkpos" type="text" />
              </div>
            </div>
            
            </div>
            <div class="col-md-1">

            </div>

        </div>
      </div>
<!--                        addresss ktp end                           --> 
     
<!--                        addresss surat meyurat begin                            --> 
        <div class="row">
        <div class="col-md-12">

            <div class="form-group">
               
              <label for="addrs2" class="col-sm-2 control-label">
               <span class="pull-left">
                Alamat Surat - Menyurat
                </span>
              </label>
              <div class="col-sm-10">
                <textarea class="form-control" id="addrs2" name="addrs2" data-parsley-group="first" required=""></textarea>
              </div>
            </div>
   
        </div>
        </div>
      <div class="row">
        <div class="col-md-7">
        <div class="col-md-3">
        </div>
        <div class="col-md-9">
            <div class="form-group">
               
              <label for="suratkel" class="col-sm-4 control-label">
               <span class="pull-left">
                Kelurahan
                </span>
              </label>
              <div class="col-sm-8">
                <input class="form-control" id="suratkel" name="suratkel" type="text" />
              </div>
            </div>
            <div class="form-group">
              <label for="suratkota" class="col-sm-4 control-label">
               <span class="pull-left">
                Kota
                </span>
              </label>
              <div class="col-sm-8">
                <input class="form-control" id="suratkota" name="suratkota" type="text" />
              </div>
            </div>
            
            <div class="form-group">
              <label for="surattelp" class="col-sm-4 control-label">
               <span class="pull-left">
                No. Telepon
                </span>
              </label>
              <div class="col-sm-8">
                <input class="form-control" id="surattelp" name="surattelp" type="text" />
              </div>
            </div>

            </div>
        </div>
        <div class="col-md-5">
        <div class="col-md-11">
          <div class="form-group">
               
              <label for="suratkec" class="col-sm-3 control-label">
               <span class="pull-left">
                Kecamatan
                </span>
              </label>
              <div class="col-sm-9">
                <input class="form-control" id="suratkec" name="suratkec" type="text" />
              </div>
            </div>
            <div class="form-group">
              <label for="suratkpos" class="col-sm-3 control-label">
               <span class="pull-left">
                Kode Pos
                </span>
              </label>
              <div class="col-sm-9">
                <input class="form-control" id="suratkpos" name="suratkpos" type="text" />
              </div>
            </div>
            
            </div>
            <div class="col-md-1">

            </div>

        </div>
      </div>
<!--                        addresss surat menyurat end                           -->
      <div class="row">
        <div class="col-md-6">

            <div class="form-group">
               
              <label for="mother" class="col-sm-4 control-label">
              <span class="pull-left">
                Nama Gadis Ibu Kandung
              </span>
              </label>
              <div class="col-sm-8">
                <input class="form-control" id="mother" type="text" name="mother" />
              </div>
            </div>
            <div class="form-group">
              <label for="stat_nikah" class="col-sm-4 control-label">
              <span class="pull-left">
                Status Pernikahan
              </span>
              </label>
              <div class="col-sm-8">
                <select class="form-control" id="stat_nikah" name="stat_nikah" />
                </select>
              </div>
            </div>

        </div>
        <div class="col-md-6">

            <div class="form-group">

            </div>
             <div class="form-group">
            <label  class="col-sm-4 control-label">
                
            </label>
            <div class="col-sm-8">
                
             </div>
            </div>  
               <div class="form-group">
            <label  class="col-sm-4 control-label">
                
            </label>
            <div class="col-sm-8">
              
             </div>
            </div>
            <div class="form-group">
               
              <label for="date_married" class="col-sm-4 control-label">
                Tanggal Pernikahan
              </label>
              <div class="col-sm-8">
                <input class="form-control" id="inputPassword3" type="password" />
              </div>
            </div>
        </div>
      </div>

<!--                        begin of table                      -->      
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
<!--                        end of table                      -->

      <div class="row">
        <div class="col-md-12">

            <div class="form-group">
               
              <label for="reason" control-label">
                Alasan Berhenti :
              </label>
                <div class="col-sm-11">
                  <input class="form-control" id="reason" type="text" name="reason" />
                </div>
            </div>
            <div class="form-group">
              <label for="jobdesc" control-label">
                Uraian Tugas dan Tanggung Jawab
              </label>
                <div class="col-sm-11">
                <textarea class="form-control" id="jobdesc" name="jobdesc" >
                </textarea>
                </div>
            </div>
        </div>
      </div>


      <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">

            <div class="form-group">
               
              <label for="no_spk" class="col-sm-8" >
                Nomor Surat Perjanjian Kerja
              </label>
              <div class="col-sm-11">
              <input class="form-control" id="no_spk" name="no_spk" type="text" readonly />
              </div>
            </div>
        </div>
        <div class="col-md-4">
           <div class="form-group">
              <label for="no_sek" class="col-sm-8">
                Nomor Surat Evaluasi Kerja
              </label>
               <div class="col-sm-11">
                <input class="form-control" id="no_sek" name="no_sek" type="text" readonly />
              </div>
            </div>
        </div>
      </div>

<!--                           awal edit                                                                           -->

      <div class="row">
        <div class="col-md-10">
            <div class="form-group">
              <label for="month_prob" class="col-sm-4 control-label">
              <span class="pull-left">
                Bulan Kontrak/Probition
              </span>
              </label>
              <div class="col-sm-5">
                <input class="form-control" id="month_prob" type="text" name="month_prob" />
              </div>
            </div>

            <div class="form-group">
              <label for="month_prob" class="col-sm-4 control-label">
              <span class="pull-left">
                Tanggal Expired Kontrak/Probition
              </span>
              </label>
              <div class="col-sm-5">
                <input class="form-control" id="month_prob" type="text" name="month_prob" />
              </div>
            </div>

            <div class="form-group">
              <label for="month_prob" class="col-sm-4 control-label">
              <span class="pull-left">
                Kontrak Ke-
              </span>
              </label>
              <div class="col-sm-5">
                <input class="form-control" id="month_prob" type="text" name="month_prob" />
              </div>
            </div>

            <div class="form-group">
              <label for="month_prob" class="col-sm-4 control-label">
              <span class="pull-left">
                Bulan Kontrak/Probition
              </span>
              </label>
              <div class="col-sm-5">
                <input class="form-control" id="month_prob" type="text" name="month_prob" />
              </div>
            </div>

            <div class="form-group">
              <label for="month_prob" class="col-sm-4 control-label">
              <span class="pull-left">
                Tanggal Expired Kontrak/Probition
              </span>
              </label>
              <div class="col-sm-5">
                <input class="form-control" id="month_prob" type="text" name="month_prob" />
              </div>
            </div>

            <div class="form-group">
              <label for="month_prob" class="col-sm-4 control-label">
              <span class="pull-left">
                Kontrak Ke-
              </span>
              </label>
              <div class="col-sm-5">
                <input class="form-control" id="month_prob" type="text" name="month_prob" />
              </div>
            </div>

            <div class="form-group">
              <label for="month_prob" class="col-sm-4 control-label">
              <span class="pull-left">
                Bulan Kontrak/Probition
              </span>
              </label>
              <div class="col-sm-5">
                <input class="form-control" id="month_prob" type="text" name="month_prob" />
              </div>
            </div>

            <div class="form-group">
              <label for="month_prob" class="col-sm-4 control-label">
              <span class="pull-left">
                Tanggal Expired Kontrak/Probition
              </span>
              </label>
              <div class="col-sm-5">
                <input class="form-control" id="month_prob" type="text" name="month_prob" />
              </div>
            </div>

            <div class="form-group">
              <label for="month_prob" class="col-sm-4 control-label">
              <span class="pull-left">
                Kontrak Ke-
              </span>
              </label>
              <div class="col-sm-5">
                <input class="form-control" id="month_prob" type="text" name="month_prob" />
              </div>
            </div>

            <div class="form-group">
              <label for="month_prob" class="col-sm-4 control-label">
              <span class="pull-left">
                Bulan Kontrak/Probition
              </span>
              </label>
              <div class="col-sm-5">
                <input class="form-control" id="month_prob" type="text" name="month_prob" />
              </div>
            </div>

            <div class="form-group">
              <label for="month_prob" class="col-sm-4 control-label">
              <span class="pull-left">
                Tanggal Expired Kontrak/Probition
              </span>
              </label>
              <div class="col-sm-5">
                <input class="form-control" id="month_prob" type="text" name="month_prob" />
              </div>
            </div>

            <div class="form-group">
              <label for="month_prob" class="col-sm-4 control-label">
              <span class="pull-left">
                Kontrak Ke-
              </span>
              </label>
              <div class="col-sm-5">
                <input class="form-control" id="month_prob" type="text" name="month_prob" />
              </div>
            </div>

            <div class="form-group">
              <label for="month_prob" class="col-sm-4 control-label">
              <span class="pull-left">
                Bulan Kontrak/Probition
              </span>
              </label>
              <div class="col-sm-5">
                <input class="form-control" id="month_prob" type="text" name="month_prob" />
              </div>
            </div>

            <div class="form-group">
              <label for="month_prob" class="col-sm-4 control-label">
              <span class="pull-left">
                Tanggal Expired Kontrak/Probition
              </span>
              </label>
              <div class="col-sm-5">
                <input class="form-control" id="month_prob" type="text" name="month_prob" />
              </div>
            </div>

            <div class="form-group">
              <label for="month_prob" class="col-sm-4 control-label">
              <span class="pull-left">
                Kontrak Ke-
              </span>
              </label>
              <div class="col-sm-5">
                <input class="form-control" id="month_prob" type="text" name="month_prob" />
              </div>
            </div>

            <div class="form-group">
              <label for="month_prob" class="col-sm-4 control-label">
              <span class="pull-left">
                Bulan Kontrak/Probition
              </span>
              </label>
              <div class="col-sm-5">
                <input class="form-control" id="month_prob" type="text" name="month_prob" />
              </div>
            </div>

            <div class="form-group">
              <label for="month_prob" class="col-sm-4 control-label">
              <span class="pull-left">
                Tanggal Expired Kontrak/Probition
              </span>
              </label>
              <div class="col-sm-5">
                <input class="form-control" id="month_prob" type="text" name="month_prob" />
              </div>
            </div>

            <div class="form-group">
              <label for="month_prob" class="col-sm-4 control-label">
              <span class="pull-left">
                Kontrak Ke-
              </span>
              </label>
              <div class="col-sm-5">
                <input class="form-control" id="month_prob" type="text" name="month_prob" />
              </div>
            </div>

            <div class="form-group">
              <label for="month_prob" class="col-sm-4 control-label">
              <span class="pull-left">
                Bulan Kontrak/Probition
              </span>
              </label>
              <div class="col-sm-5">
                <input class="form-control" id="month_prob" type="text" name="month_prob" />
              </div>
            </div>
<!--                           belum edit                                                                           -->
        </div>
        <div class="col-md-2">
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