@extends('layouts-master.master')

@section('title', 'Perubahan Karyawan')

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
                <input type="input" class="form-control" id="jabatan"  disabled />
            </div>
            <div class="form-group"> 
                <label for="tanggal">
                   Tanggal Aktif Kerja
                </label>
                <input type="date" class="form-control" id="tanggal_aktif"  disabled />
            </div>
            
        </div>
        <div class="col-md-6">

          <div class="form-group"> 
                <img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/" class="img-rounded col-sm-6"  /> 
               
                <div class="col-sm-10">
                     <input type="file" id="foto_ktp" value ="">      
                </div>
                
         </div>
        </div>
          
        </div>
      </div>

      <div class="row">
            <div class="col-md-12">
                <hr>
            </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-4">
              <div class="form-group"> 
                <img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/" class="img-rounded" /> 
                <input type="file" id="foto_kk" value ="">       
              </div>
            </div>
            <div class="col-md-4">
                <div class="form-group"> 
                <img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/" class="img-rounded" /> 
                <input type="file" id="foto_npwp" value ="">       
              </div>
            </div>
            <div class="col-md-4">
                <div class="form-group"> 
                <img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/" class="img-rounded" /> 
                <input type="file" id="foto_sim" value ="">       
              </div>
            </div>
            
          </div>
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
            <div class="col-md-6">
              
                <div class="form-group">
                     
                    <label for="no_ktp" class="col-sm-4 ">
                      No KTP
                    </label>
                    <div class="col-sm-10"> 
                      <input type="input" class="form-control" id="no_ktp" disabled />
                    </div>
                    
                </div>
                <div class="form-group">
                    <label for="no_npwp" class="col-sm-4 ">
                       No NPWP
                    </label>

                    <div class="col-sm-10"> 
                     <input type="input" class="form-control" id="no_npwp" disabled/>   
                    </div>
                </div>

                <div class="form-group">
                    <label for="no_npwp" class="col-sm-4 ">
                       No SIM
                    </label>

                    <div class="col-sm-10"> 
                     <input type="input" class="form-control" id="no_npwp" disabled/>   
                    </div>
                </div>

                <div class="form-group">
                    <label for="mama" class="col-sm-6">
                       Nama Gadis Ibu Kandung
                    </label>
                    <div class="col-sm-10">
                      <input type="input" class="form-control" id="mama" disabled/>
                    </div>
                    
                  </div>
                  <div class="form-group">
                    <label for="nama_lengkap" class="col-sm-6">
                       Nama Lengkap
                    </label>
                    <div class="col-sm-10">
                      <input type="input" class="form-control" id="nama_lengkap" disabled/>  
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="agama" class="col-sm-6">
                       Agama
                    </label>
                    <div class="col-sm-10">
                      <input type="input" class="form-control" id="agama" disabled/>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="tempat_lahir" class="col-sm-4">
                      Tempat Lahir
                    </label>
                    <div class="col-sm-10">
                        <input type="input" class="form-control" id="tempat_lahir" disabled/>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="jenis_kelamin" class="col-sm-4">
                      Jenis Kelamin
                    </label>

                    <div class="col-sm-10">
                         <input  id = "sex" type="radio" name ="gender"  value ="L" disabled/> L
                         <input id = "sex" type="radio" name="gender"    value="P" disabled/>   P  
                    </div>
                  
                  </div>

                   <div class="form-group">
                    <label for="gol_dar" class="col-sm-4">
                      Golongan Darah
                    </label>
                    <div class="col-sm-10">
                      <input type="input" class="form-control" id="gol_dar" disabled/>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="tinggi" class="col-sm-4">
                      Tinggi Badan
                    </label>

                    <div class="col-sm-10">
                      <div class="input-group">
                        <input id ="tinggi" type="text" class="form-control" placeholder="" aria-describedby="basic-addon2" disabled />
                        <span class="input-group-addon" id="basic-addon2">cm</span>
                    </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="berat" class="col-sm-4">
                      Berat Badan
                    </label>
                    
                    <div class="col-sm-10">
                        <div class="input-group">
                          <input id ="berat" type="text" class="form-control" placeholder="" aria-describedby="basic-addon2" disabled/>
                          <span class="input-group-addon" id="basic-addon2">kg</span>
                        </div>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="tgl_lahir" class="col-sm-4">
                      Tanggal Lahir
                    </label>

                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="tgl_lahir" disabled/>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="alamat_ktp" class="col-sm-6">
                      Alamat Sesuai Ktp
                    </label>

                    <div class="col-sm-10">
                       <textarea id="alamat_ktp" class="form-control" rows="3" disabled /></textarea>
                    </div>

                  </div>

                  <div class="form-group">
                    <label for="lurah_ktp" class="col-sm-6">
                      Kelurahan Sesuai Ktp
                    </label>
                    <div class="col-sm-10">
                        <input type="input" id="lurah_ktp" class="form-control" disabled />
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="kota_ktp" class="col-sm-6">
                      Kota Sesuai Ktp
                    </label>

                    <div class="col-sm-10">
                        <input type="input" id="kota_ktp" class="form-control" disabled />
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="telp_ktp" class="col-sm-6">
                      No Telepon Alamat Sesuai Ktp
                    </label>
                    <div class="col-sm-10">
                      <input type="tel" id="telp_ktp" class="form-control" disabled />
                    </div>
                    
                  </div>


                  <div class="form-group">
                    <label for="kec_ktp" class="col-sm-6"> 
                      Kecamatan Sesuai Ktp
                    </label>
                    <div class="col-sm-10">
                      <input type="input" id="kec_ktp" class="form-control" disabled />  
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="kodepos_ktp" class="col-sm-6">
                      Kode Pos Sesuai Ktp
                    </label>

                    <div class="col-sm-10">
                       <input type="input" id="kodepos_ktp" class="form-control" disabled />
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="alamat_surat" class="col-sm-6">
                      Alamat Surat Menyurat
                    </label>

                    <div class="col-sm-10">
                      <textarea id="alamat_surat" class="form-control" rows="3" disabled /></textarea>
                    </div>
                  </div>


                   <div class="form-group">
                    <label for="lurah_surat" class="col-sm-6">
                      Kelurahan Surat Menyurat
                    </label>
                    <div class="col-sm-10">
                       <input type="input" id="lurah_surat" class="form-control" disabled />
                    </div>
                    
                  </div>

                  <div class="form-group">
                    <label for="kota_surat" class="col-sm-6">
                      Kota Surat Menyurat
                    </label>
                    <div class="col-sm-10">
                      <input type="input" id="kota_surat" class="form-control" disabled />
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="telp_surat" class="col-sm-6">
                      No Telepon Surat Menyurat
                    </label>
                    <div class="col-sm-10">
                        <input type="tel" id="telp_surat" class="form-control" disabled />
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="kec_surat" class="col-sm-6">
                      Kecamatan Surat Menyurat
                    </label>
                    <div class="col-sm-10">
                      <input type="input" id="kec_surat" class="form-control" disabled /> 
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="kodepos_surat" class="col-sm-6">
                      Kodepos  Surat Menyurat
                    </label>

                    <div class="col-sm-10">
                      <input type="input" id="kodepos_surat" class="form-control" disabled />
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="no_hp" class="col-sm-4">
                    No Handphone
                    </label>
                    
                    <div class="col-sm-10">
                       <input type="tel" id="no_hp" class="form-control" disabled />
                    </div>
                  </div>

                  <div class="form-group">
                      <label for="marital" class="col-sm-4">
                        Status Pernikahan
                      </label>

                      <div class="col-sm-10">
                          <div class="dropdown">
                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Dropdown
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" id="marital" disabled />
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                          </ul>
                      </div>
                      </div>
                
                  </div>

                  <div class="form-group">
                    <label for="tgl_nikah" class="col-sm-6">
                      Tanggal Status Pernikahan
                    </label>

                    <div class="col-sm-10">
                        <input type="date" id="tgl_nikah" class="form-control" disabled />
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="no_kk" class="col-sm-6">
                      No Kartu Keluarga
                    </label>

                    <div class="col-sm-10">
                        <input type="date" id="no_kk" class="form-control" disabled />
                    </div>
                     
                  </div>
            </div>
            <div class="col-md-6">
                                <div class="form-group">
                     
                    <label for="no_ktp_br" class="col-sm-4 ">
                      No KTP
                    </label>
                    <div class="col-sm-10"> 
                      <input type="input" class="form-control" id="no_ktp_br" />
                    </div>
                    
                </div>
                <div class="form-group">
                    <label for="no_npwp" class="col-sm-4 ">
                       No NPWP
                    </label>

                    <div class="col-sm-10"> 
                     <input type="input" class="form-control" id="no_npwp_br" />   
                    </div>
                </div>

                <div class="form-group">
                    <label for="no_npwp" class="col-sm-4 ">
                       No SIM
                    </label>

                    <div class="col-sm-10"> 
                     <input type="input" class="form-control" id="no_npwp_br" />   
                    </div>
                </div>

                <div class="form-group">
                    <label for="mama" class="col-sm-6">
                       Nama Gadis Ibu Kandung
                    </label>
                    <div class="col-sm-10">
                      <input type="input" class="form-control" id="mama_br" />
                    </div>
                    
                  </div>
                  <div class="form-group">
                    <label for="nama_lengkap" class="col-sm-6">
                       Nama Lengkap
                    </label>
                    <div class="col-sm-10">
                      <input type="input" class="form-control" id="nama_lengkap_br" />  
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="agama" class="col-sm-6">
                       Agama
                    </label>
                    <div class="col-sm-10">
                      <input type="input" class="form-control" id="agama_br" />
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="tempat_lahir" class="col-sm-4">
                      Tempat Lahir
                    </label>
                    <div class="col-sm-10">
                        <input type="input" class="form-control" id="tempat_lahir_br" />
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="jenis_kelamin" class="col-sm-4">
                      Jenis Kelamin
                    </label>

                    <div class="col-sm-10">
                         <input  id = "sex" type="radio" name ="gender"  value ="L_br" /> L
                         <input id = "sex" type="radio" name="gender"    value="P_br" />   P  
                    </div>
                  
                  </div>

                   <div class="form-group">
                    <label for="gol_dar" class="col-sm-4">
                      Golongan Darah
                    </label>
                    <div class="col-sm-10">
                      <input type="input" class="form-control" id="gol_dar_br" />
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="tinggi" class="col-sm-4">
                      Tinggi Badan
                    </label>

                    <div class="col-sm-10">
                      <div class="input-group">
                        <input id ="tinggi_br" type="text" class="form-control" placeholder="" aria-describedby="basic-addon2"  />
                        <span class="input-group-addon" id="basic-addon2">cm</span>
                    </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="berat" class="col-sm-4">
                      Berat Badan
                    </label>
                    
                    <div class="col-sm-10">
                        <div class="input-group">
                          <input id ="berat_br" type="text" class="form-control" placeholder="" aria-describedby="basic-addon2"  />
                          <span class="input-group-addon" id="basic-addon2">kg</span>
                        </div>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="tgl_lahir" class="col-sm-4">
                      Tanggal Lahir
                    </label>

                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="tgl_lahir_br" />
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="alamat_ktp" class="col-sm-6">
                      Alamat Sesuai Ktp
                    </label>

                    <div class="col-sm-10">
                       <textarea id="alamat_ktp_br" class="form-control" rows="3"  /></textarea>
                    </div>

                  </div>

                  <div class="form-group">
                    <label for="lurah_ktp" class="col-sm-6">
                      Kelurahan Sesuai Ktp
                    </label>
                    <div class="col-sm-10">
                        <input type="input" id="lurah_ktp_br" class="form-control"  />
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="kota_ktp" class="col-sm-6">
                      Kota Sesuai Ktp
                    </label>

                    <div class="col-sm-10">
                        <input type="input" id="kota_ktp_br" class="form-control"  />
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="telp_ktp" class="col-sm-6">
                      No Telepon Alamat Sesuai Ktp
                    </label>
                    <div class="col-sm-10">
                      <input type="tel" id="telp_ktp_br" class="form-control"  />
                    </div>
                    
                  </div>


                  <div class="form-group">
                    <label for="kec_ktp" class="col-sm-6"> 
                      Kecamatan Sesuai Ktp
                    </label>
                    <div class="col-sm-10">
                      <input type="input" id="kec_ktp_br" class="form-control"  />  
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="kodepos_ktp" class="col-sm-6">
                      Kode Pos Sesuai Ktp
                    </label>

                    <div class="col-sm-10">
                       <input type="input" id="kodepos_ktp_br" class="form-control"  />
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="alamat_surat" class="col-sm-6">
                      Alamat Surat Menyurat
                    </label>

                    <div class="col-sm-10">
                      <textarea id="alamat_surat_br" class="form-control" rows="3"  /></textarea>
                    </div>
                  </div>


                   <div class="form-group">
                    <label for="lurah_surat" class="col-sm-6">
                      Kelurahan Surat Menyurat
                    </label>
                    <div class="col-sm-10">
                       <input type="input" id="lurah_surat_br" class="form-control"  />
                    </div>
                    
                  </div>

                  <div class="form-group">
                    <label for="kota_surat" class="col-sm-6">
                      Kota Surat Menyurat
                    </label>
                    <div class="col-sm-10">
                      <input type="input" id="kota_surat_br" class="form-control"  />
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="telp_surat" class="col-sm-6">
                      No Telepon Surat Menyurat
                    </label>
                    <div class="col-sm-10">
                        <input type="tel" id="telp_surat_br" class="form-control"  />
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="kec_surat" class="col-sm-6">
                      Kecamatan Surat Menyurat
                    </label>
                    <div class="col-sm-10">
                      <input type="input" id="kec_surat_br" class="form-control"  /> 
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="kodepos_surat" class="col-sm-6">
                      Kodepos  Surat Menyurat
                    </label>

                    <div class="col-sm-10">
                      <input type="input" id="kodepos_surat_br" class="form-control"  />
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="no_hp" class="col-sm-4">
                    No Handphone
                    </label>
                    
                    <div class="col-sm-10">
                       <input type="tel" id="no_hp_br" class="form-control"  />
                    </div>
                  </div>

                  <div class="form-group">
                      <label for="marital" class="col-sm-4">
                        Status Pernikahan
                      </label>

                      <div class="col-sm-10">
                          <div class="dropdown">
                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Dropdown
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" id="matial_br"  />
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                          </ul>
                      </div>
                      </div>
                
                  </div>

                  <div class="form-group">
                    <label for="tgl_nikah" class="col-sm-6">
                      Tanggal Status Pernikahan
                    </label>

                    <div class="col-sm-10">
                        <input type="date" id="tgl_nikah_br" class="form-control"  />
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="no_kk" class="col-sm-6">
                      No Kartu Keluarga
                    </label>

                    <div class="col-sm-10">
                        <input type="date" id="no_kk_br" class="form-control"  />
                    </div>
                     
                  </div>                     
            </div>
          </div> 
          
          <div class="row">
            <div class="col-md-12">
                <hr>
            </div>
          </div>

          <span class="label label-default">Susunan Keluarga</span>

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

          <span class="label label-default">Riwayat Pendukung</span>
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

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                    <label for="no_kk" class="col-sm-6">
                      Bulan Kontrak/Probation
                    </label>

                    <div class="col-sm-10">
                        <input type="date" id="bln_kontrak" class="form-control"  disabled />
                    </div>
                     
                </div> 

                 <div class="form-group">
                    <label for="no_kk" class="col-sm-6">
                      Tanggal Expirate Kotrak/Probation
                    </label>

                    <div class="col-sm-10">
                        <input type="date" id="exp_kontrak" class="form-control"  disabled/>
                    </div>
                     
                </div>       

                 <div class="form-group">
                    <label for="no_kk" class="col-sm-6">
                      Kontrak Ke
                    </label>

                    <div class="col-sm-10">
                        <input type="input" id="kontrak_ke" class="form-control"  disabled/>
                    </div>
                     
                </div>

                <div class="form-group">
                    <label for="no_kk" class="col-sm-6">
                      Kode Pajak
                    </label>

                    <div class="col-sm-10">
                        <input type="input" id="kode_pajak" class="form-control"  disabled/>
                    </div>
                </div>    

                <div class="form-group">
                    <label for="no_kk" class="col-sm-6">
                      Suku Ras
                    </label>

                    <div class="col-sm-10">
                        <select class="form-control" id="suku_ras" disabled/>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                          </select>
                    </div>
                     
                </div> 

                <div class="form-group">
                    <label for="no_kk" class="col-sm-6">
                      Penduduk Lokal
                    </label>

                    <div class="col-sm-10">
                        <input type="input" id="lokal" class="form-control"  disabled/>
                    </div>
                     
                </div>  

                <div class="form-group">
                    <label for="no_kk" class="col-sm-6">
                      Kode Bank
                    </label>

                    <div class="col-sm-10">
                        <input type="input" id="kode_bank" class="form-control"  disabled/>
                    </div>
                     
                </div>

                <div class="form-group">
                    <label for="no_kk" class="col-sm-6">
                      Nama Bank
                    </label>

                    <div class="col-sm-10">
                        <select class="form-control" id="nama_bank" disabled/>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                          </select>
                    </div>
                     
                </div>                        

                <div class="form-group">
                    <label for="no_kk" class="col-sm-6">
                      No. Rekening
                    </label>

                    <div class="col-sm-10">
                        <input type="input" id="no_rek" class="form-control"  disabled/>
                    </div>
                     
                </div>     

                <div class="form-group">
                    <label for="no_kk" class="col-sm-6">
                      No Bpjs Ketenagakerjaan
                    </label>

                    <div class="col-sm-10">
                        <input type="input" id="bpjs_ket" class="form-control"  disabled/>
                    </div>
                     
                </div>     

                <div class="form-group">
                    <label for="no_kk" class="col-sm-6">
                      No Bpjs Kesehatan
                    </label>

                    <div class="col-sm-10">
                        <input type="input" id="bpjs_kes" class="form-control"  disabled/>
                    </div>
                     
                </div>     

                <div class="form-group">
                    <label for="no_kk" class="col-sm-6">
                      Alamat Emplacement
                    </label>

                    <div class="col-sm-10">
                        <textarea id="alamat_emp" class="form-control" rows="3"  disabled/></textarea>
                    </div>
                     
                </div>     

                <div class="form-group">
                    <label for="no_kk" class="col-sm-6">
                      Nama Asisten
                    </label>

                    <div class="col-sm-10">
                        <input type="input" name="" class="form-control" id="asisten" disabled/>
                    </div>
                     
                </div>   

                <div class="form-group">
                    <label for="no_kk" class="col-sm-6">
                      Astek Type
                    </label>

                    <div class="col-sm-10">
                          <select class="form-control" id="astek_type" disabled/>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                          </select>
                    </div>
                     
                </div>

                <div class="form-group">
                    <label for="no_kk" class="col-sm-6">
                      No Paspor
                    </label>

                    <div class="col-sm-10">
                        <input type="input" name="" class="form-control" id="paspor" disabled/>
                    </div>
                     
                </div>        

                <div class="form-group">
                    <label for="no_kk" class="col-sm-6">
                      Masa Berlaku
                    </label>

                    <div class="col-sm-10">
                        <input type="input" name="" class="form-control" id="paspor_valid" disabled/>
                    </div>
                     
                </div>   




            </div>
            <div class="col-md-6">
                  

                <div class="form-group">
                    <label for="no_kk" class="col-sm-6">
                      Bulan Kontrak/Probation
                    </label>

                    <div class="col-sm-10">
                        <input type="date" id="bln_kontrak_br" class="form-control"  />
                    </div>
                     
                </div> 

                 <div class="form-group">
                    <label for="no_kk" class="col-sm-6">
                      Tanggal Expirate Kotrak/Probation
                    </label>

                    <div class="col-sm-10">
                        <input type="date" id="exp_kontrak_br" class="form-control"  />
                    </div>
                     
                </div>       

                 <div class="form-group">
                    <label for="no_kk" class="col-sm-6">
                      Kontrak Ke
                    </label>

                    <div class="col-sm-10">
                        <input type="input" id="kontrak_ke_br" class="form-control"  ]/>
                    </div>
                     
                </div>

                <div class="form-group">
                    <label for="no_kk" class="col-sm-6">
                      Kode Pajak
                    </label>

                    <div class="col-sm-10">
                        <input type="input" id="kode_pajak_br" class="form-control"  />
                    </div>
                </div>    

                <div class="form-group">
                    <label for="no_kk" class="col-sm-6">
                      Suku Ras
                    </label>

                    <div class="col-sm-10">
                        <select class="form-control" id="suku_br" />
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                          </select>
                    </div>
                     
                </div> 

                <div class="form-group">
                    <label for="no_kk" class="col-sm-6">
                      Penduduk Lokal
                    </label>

                    <div class="col-sm-10">
                        <input type="input" id="lokal_br" class="form-control"  />
                    </div>
                     
                </div>  

                <div class="form-group">
                    <label for="no_kk" class="col-sm-6">
                      Kode Bank
                    </label>

                    <div class="col-sm-10">
                        <input type="input" id="kode_bank_br" class="form-control"  />
                    </div>
                     
                </div>

                <div class="form-group">
                    <label for="no_kk" class="col-sm-6">
                      Nama Bank
                    </label>

                    <div class="col-sm-10">
                       <select class="form-control" id="nama_bank_br" />
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                          </select>
                    </div>
                     
                </div>                        

                <div class="form-group">
                    <label for="no_kk" class="col-sm-6">
                      No. Rekening
                    </label>

                    <div class="col-sm-10">
                        <input type="input" id="no_rek_br" class="form-control"  />
                    </div>
                     
                </div>     

                <div class="form-group">
                    <label for="no_kk" class="col-sm-6">
                      No Bpjs Ketenagakerjaan
                    </label>

                    <div class="col-sm-10">
                        <input type="input" id="bpjs_ket_br" class="form-control"  />
                    </div>
                     
                </div>     

                <div class="form-group">
                    <label for="no_kk" class="col-sm-6">
                      No Bpjs Kesehatan
                    </label>

                    <div class="col-sm-10">
                        <input type="input" id="bpjs_kes_br" class="form-control"  />
                    </div>
                     
                </div>     

                <div class="form-group">
                    <label for="no_kk" class="col-sm-6">
                      Alamat Emplacement
                    </label>

                    <div class="col-sm-10">
                        <textarea id="alamat_emp_br" class="form-control" rows="3"  /></textarea>
                    </div>
                     
                </div>   

                <div class="form-group">
                    <label for="no_kk" class="col-sm-6">
                      Nama Asisten
                    </label>

                    <div class="col-sm-10">
                        <input type="input" name="" class="form-control" id="asisten">
                    </div>
                     
                </div>   

                <div class="form-group">
                    <label for="no_kk" class="col-sm-6">
                      Astek Type
                    </label>

                    <div class="col-sm-10">
                        
                          <select class="form-control" id="astek_type">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                          </select>
                    </div>
                     
                </div>

                <div class="form-group">
                    <label for="no_kk" class="col-sm-6">
                      No Paspor
                    </label>

                    <div class="col-sm-10">
                        <input type="input" name="" class="form-control" id="paspor">
                    </div>
                     
                </div>        

                <div class="form-group">
                    <label for="no_kk" class="col-sm-6">
                      Masa Berlaku
                    </label>

                    <div class="col-sm-10">
                        <input type="input" name="" class="form-control" id="paspor_valid">
                    </div>
                     
                </div>   


            </div>
          </div>

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