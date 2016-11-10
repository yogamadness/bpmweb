@extends('layouts.app')

@section('page-css')
<link href="{{ asset('/plugins/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/plugins/datepicker/datepicker3.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/plugins/iCheck/all.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/plugins/colorpicker/bootstrap-colorpicker.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/plugins/timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />

<link href="{{ asset('/plugins/datatables/dataTables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('plugins/datatables/extensions/Responsive/css/dataTables.responsive.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('htmlheader_title')
Persetujuan Mutasi, Demosi, Promosi
@endsection
@section('contentheader_title')
Persetujuan Mutasi, Demosi, Promosi
@endsection

@section('main-content')
<div class="row">
  <div class="col-xs-12">
    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">Persetujuan Perubahan Status Karyawan - [[Non Staff Pemanen]]</h3>
      </div>

      <!-- Create Demosi Fields -->
      <div class="box-body">

      	<!-- panel header -->
      	<div class="panel panel-default">
      		<div class="panel-body">
      			<div class="form-group">
      				<div class="col-md-6 md10">
      					<label for="iNikNasional">NIK Nasional</label>
      					<input type="text" class="form-control" placeholder="" id="iNikNasional" name="iNikNasional" disabled>
      				</div>
                <div class="col-md-6">
                        <label id="iTanggalMasuk">Tanggal Masuk Kerja:</label>
                        <div class="input-group date">
                            <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right datepicker" id="iTanggalMasukKerja" disabled name="iTanggalMasukKerja">
                        </div>
                </div>
              	</div>
                  <div class="form-group">
                      <div class="col-md-6 md10" id="bloodhound">
                              <label for="iNikSap">NIK SAP</label>
                              <input type="text" class="form-control tags" placeholder="" id="iNikSap" name="iNikSap" disabled>
                      </div>
                      <div class="col-md-6">
                              <label for="iTanggalEfektif">Tanggal Efektif Berlaku:</label>
                              <!--Otomatis awal bulan jika karyawan non staff)-->
                              <div class="input-group date">
                                      <div class="input-group-addon">
                                              <i class="fa fa-calendar"></i>
                                      </div>
                                      <input type="text" class="form-control pull-right datepicker" id="iTanggalEfektifBerlaku" name="iTanggalEfektifBerlaku" disabled>
                          </div>
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="col-md-6 md10">
                      	<label for="iNama">Nama</label>
      					<input type="text" class="form-control" placeholder="otomatis terisi kalo NIK Nasional terisi" readonly id="iNama" name="iNama" disabled>
                      </div>
                      <div class="col-md-6">
                      	<label for="iNomorPtk">Nomor PTK</label>
                          <!-- nomor PTK ambil dari table -->
                          <select class="form-control select2" style="width: 100%;" id="iNomorPtk" name="iNomorPtk" disabled>
                                  <option>PTK/0920903123490347</option>
                                  <option>PTK/0920903123490348</option>
                                  <option>PTK/0920903123490349</option>
                                  <option>PTK/0920903123490350</option>
                          </select>
                      </div>
                  </div>
              </div>
          </div>
          <!--end panel header -->
          <!-- panel detail -->
          <div class="panel panel-default">
      		<div class="panel-body">
      			<div class="form-group">
      				<div class="col-md-6 md10">
      					<label for="iJenisPerubahan">Jenis Perubahan</label>
      		            <div class="row">
      		                <div class="col-xs-7 col-sm-7">

                                  <select class="form-control select2" style="width: 100%;" id="iJenisPerubahan" name="iJenisPerubahan" disabled>
                                          <option>Pengangkatan Karyawan</option>
                                          <option>Mutasi</option>
                                          <option>Demosi</option>
                                          <option>Promosi</option>
                                  </select>
      		                </div>
      		                <div class="col-xs-5 col-sm-5">
                              	<select class="form-control select2 emp-work-status"  id="iJenisPerubahanEmpWorkStatus" name="iJenisPerubahanEmpWorkStatus" disabled></select>
      		                </div>
      					</div>
      				</div>
      				<div class="col-md-6">
      					<label for="iPeriodePengangkatanKaryawanKontrak">Periode Pengangkatan Karyawan Kontrak</label>
                          <div class="input-group">
                                  <div class="input-group-addon">
                                          <i class="fa fa-calendar"></i>
                                  </div>
                                  <input type="text" class="form-control pull-right reservation" id="iPeriodePengangkatanKaryawanKontrak" name="iPeriodePengangkatanKaryawanKontrak" disabled>
                          </div>
                      </div>
      			</div>
              </div>
          </div>
          <!--end panel header -->
          <!-- panel detail -->
          <div class="panel panel-default">
      		<div class="panel-body">
      			<div class="form-group">
                      <div class="col-xs-12">
                          <table id="demosi-table" class="table table-bordered">
                              <thead>
                                <tr>
                                  <th class="text-center" style="width:20%;">Tanggal Lahir</th>
                                  <th class="text-center" style="width:20%;">Umur</th>
                                  <th colspan=3 class="text-center">Absen Finger Print<br>3 bulan terakhir</th>
                                  <th colspan=3 class="text-center">Produktivitas Ton/HK Pemanen<br>(3 bulan terakhir)</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="text-center"><input id="iTanggalLahir" class="form-control" disabled></td>
                                  <td class="text-center"><input id="iUmur" class="form-control" disabled></td>
                                  <td class="text-center" style="width:10%"><input id="" class="form-control" disabled></td>
                                  <td class="text-center" style="width:10%"><input id="" class="form-control" disabled></td>
                                  <td class="text-center" style="width:10%"><input id="" class="form-control" disabled></td>
                                  <td class="text-center" style="width:10%"><input id="" class="form-control" disabled></td>
                                  <td class="text-center" style="width:10%"><input id="" class="form-control" disabled></td>
                                  <td class="text-center" style="width:10%"><input id="" class="form-control" disabled></td>
                                </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
          <!--end panel header -->
          <!-- panel detail -->
          <div class="panel panel-default">
      		<div class="panel-body">
                  <div class="row">
                      <div class="col-xs-12">
                      	<div class="form-group">
                          	<div class="col-xs-3">
                              	<label for="">Penilaian Karyawan/IPE</label>
                          	</div>
                          	<div class="col-xs-1 text-right">
                              	2013
                          	</div>
                          	<div class="col-xs-2">
                              	<label><input type="text" class="form-control" placeholder="" id="iIpe3yAgo" name="iIpe3yAgo" disabled></label>
                          	</div>
                          	<div class="col-xs-1 text-right">
                              	2014
                          	</div>
                          	<div class="col-xs-2">
                              	<label><input type="text" class="form-control" placeholder="" id="iIpe2yAgo" name="iIpe2yAgo" disabled></label>
                          	</div>
                          	<div class="col-xs-1 text-right">
                              	2015
                          	</div>
                          	<div class="col-xs-2">
                              	<label><input type="text" class="form-control" placeholder="" id="iIpe1yAgo" name="iIpe1yAgo" disabled></label>
                          	</div>
                        </div>
                      	<div class="form-group">
                          	<div class="col-xs-3">
                              	<label for="">Surat Teguran/Surat Peringatan</label>
                          	</div>
                          	<div class="col-xs-4">
                              	<label class="checkbox-inline">
                              		<input type="radio" class="minimal" readonly id="iSuratTeguran" name="iSuratTeguran" value="TA" disabled> Tidak ada
                              	</label>
                              	<label class="checkbox-inline">
                              		<input type="radio" class="minimal" readonly id="iSuratTeguran" name="iSuratTeguran" value="ST" disabled> ST
                              	</label>
                              	<label class="checkbox-inline">
                              		<input type="radio" class="minimal" readonly id="iSuratTeguran" name="iSuratTeguran" value="SP1" disabled> SP1
                              	</label>
                              	<label class="checkbox-inline">
                              		<input type="radio" class="minimal" readonly id="iSuratTeguran" name="iSuratTeguran" value="SP2" disabled> SP2
                              	</label>
                              	<label class="checkbox-inline">
                              		<input type="radio" class="minimal" readonly id="iSuratTeguran" name="iSuratTeguran" value="SP3" disabled> SP3
                              	</label>

                          	</div>
                          	<div class="col-xs-2">
                              	<label for="">Masa Berlaku</label>
                          	</div>
                          	<div class="col-xs-3">
                          		<div class="input-group">
                          			<div class="input-group-addon">
                          				<i class="fa fa-calendar"></i>
                          			</div>
                          			<input type="text" class="form-control" size="5" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask readonly id="iMasaBerlaku" name="iMasaBerlaku" disabled>
                          		</div>
                          	</div>
                          </div>

                      </div>
                  </div>
              </div>
          </div>
          <!--end panel header -->
          <!-- panel detail -->
          <div class="panel panel-default">
      		<div class="panel-heading">Perubahan Status</div>
      		<div class="panel-body">
                  <div class="form-group">
                      <div class="col-xs-12">
                      	<table id="demosi-table" class="table table-bordered responsive">
                              <thead>
                                      <tr>
                                        <th style="width:5%;">No</th>
                                        <th style="width:45%;">Keterangan</th>
                                        <th style="width:25%;">Status Lama</th>
                                        <th style="width:25%;">Status Baru</th>
                                      </tr>
                              </thead>
                              <tbody>
                                      <tr>
                                        <td>1</td>
                                        <td>Perusahaan</td>
                                        <td>
                                        	<select class="form-control select2 destroy" readonly id="iPerusahaanO" name="iPerusahaanOld" disabled>
      																		</select>
                                        </td>
                                        <td>
                                        	<select class="form-control select2" id="iPerusahaanN" name="iPerusahaanNew" disabled>
      																        <option>PT CSM</option>
      																        <option>PT TBSM</option>
      																        <option>PT BSM</option>
      																	</select>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>2</td>
                                        <td>Bisnis Area/Divisi</td>
                                        <td>
                                          <select class="form-control select2" disabled id="iBisnisAreaOld" name="iBisnisAreaOld" disabled>
                                          	<option>GBSM Inti 1</option>
                                              <option>GBSM Inti 2</option>
                                              <option>GBSM Inti 3</option>
                                              <option>GBSM Inti 4</option>
                                          </select>
                                        </td>
                                        <td>
                                          <select class="form-control select2" id="iBisnisAreaNew" name="iBisnisAreaNew" disabled>
                                              <option>GBSM Inti 2</option>
                                              <option>GBSM Inti 3</option>
                                              <option>GBSM Inti 4</option>
                                          </select>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>3</td>
                                        <td>Afdeling/Departemen</td>
                                        <td>
                                          <select class="form-control select2" id="iAfdelingOld" name="iAfdelingOld" disabled>
                                              <option>B</option>
                                              <option>C</option>
                                              <option>D</option>
                                          </select>
                                        </td>
                                        <td>
                                          <select class="form-control select2" id="iAfdelingNew" name="iAfdelingNew" disabled>
                                              <option>A</option>
                                              <option>C</option>
                                              <option>D</option>
                                          </select>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>4</td>
                                        <td>Jabatan</td>
                                        <td>
                                          <select class="form-control select2" id="iJabatanOld" name="iJabatanOld"  disabled>
                                              <option>Pemanen</option>
                                              <option>Tukang Rawat</option>
                                              <option>dll</option>
                                          </select>
                                        </td>
                                        <td>
                                          <select class="form-control select2"  id="iJabatanNew" name="iJabatanNew"  disabled>
                                              <option>Pemanen</option>
                                              <option>Tukang Rawat</option>
                                              <option>dll</option>
                                          </select>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>5</td>
                                        <td>Golongan</td>
                                        <td>
                                          <select class="form-control select2" id="iGolonganOld" name="iGolonganOld"  disabled>
                                          	<option>IA</option>
                                              <option>IB</option>
                                              <option>IC</option>
                                              <option>ID</option>
                                          </select>
                                        </td>
                                        <td>
                                          <select class="form-control select2"  id="iGolonganNew" name="iGolonganNew"  disabled>
                                              <option>IB</option>
                                              <option>IC</option>
                                              <option>ID</option>
                                          </select>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>6</td>
                                        <td>Status Karyawan</td>
                                        <td>
                                          <select class="form-control select2 emp-work-status" disabled id="iStatusKaryawanOld" name="iStatusKaryawanOld">
                                          	<!-- option dibawah dibuat untuk menyatakan nilai terpilih yg diambil dr db -->
      																			<option value="KP" selected="selected">Karyawan Probation</option>
                                          </select>
                                        </td>
                                        <td>
                                          <select class="form-control select2 emp-work-status"  id="iStatusKaryawanNew" name="iStatusKaryawanNew"  disabled></select>
                                        </td>
                                      </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
          <!--end panel header -->

          <!-- panel detail -->
          <div class="panel panel-default">
      		<div class="panel-heading">Keterangan</div>
        		<div class="panel-body">
                  <div class="form-group">
                      <div class="col-xs-12">
              					<textarea class="form-control" rows="3" placeholder="Enter ..." id="iKeterangan" name="iKeterangan" disbaled></textarea>
              				</div>
                  </div>

        		</div>
          </div>
          <!--end panel detail -->
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="col-xs-12">
                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_1" data-toggle="tab">History</a></li>
                    <li><a href="#tab_2" data-toggle="tab">Diagram Process</a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                      <p>01- Jan-2016 00:00:00 PGA Mengajukan Mutasi Karyawan</p>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_2">
                      -- flow proses approval dari BPM --
                    </div>
                    <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                  <label>Catatan</label>
                  <p>02- Jan-2016 00:00:00 Karyawan tersebut ingin menjadi tukang rawat</p>
                  <div class="form-group">
                      <input type="text" placeholder="Place some text here" class="form-control">
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <!-- end 1st box body -->
      <!-- start footer -->
      <div class="box-footer">
      	<div class="row text-center">
      		<div class="col-xs-3 ">
      			<a href="{!! route('demosi.index') !!}" class="btn btn-default">Kembali</a>
      		</div>
          <div class="col-xs-3">
      			<a href="{!! route('demosi.index') !!}" class="btn btn-default">Download</a>
      		</div>
          <div class="col-xs-3">
      			<a href="{!! route('demosi.index') !!}" class="btn btn-default">Cetak</a>
      		</div>
      		<div class="col-xs-3">
      			<a href="{!! route('demosi.index') !!}" class="btn btn-default">Selesai</a>
      		</div>
      	</div>
      </div>

    </div>
  </div>
</div>


@endsection
@section('page-script')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" type="text/javascript"></script>
<script src="{{ asset('/plugins/select2/select2.full.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/plugins/input-mask/jquery.inputmask.bundle.js') }}" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js" type="text/javascript"></script>
<script src="{{ asset('/plugins/daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>
<script src="{{ asset('/plugins/datepicker/bootstrap-datepicker.js') }}" type="text/javascript"></script>
<script src="{{ asset('/plugins/slimScroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/plugins/iCheck/icheck.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/plugins/fastclick/fastclick.js') }}" type="text/javascript"></script>
<script src="http://parsleyjs.org/dist/parsley.min.js" type="text/javascript"></script>

<script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/plugins/datatables/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js') }}" type="text/javascript"></script>

<script type="text/javascript">
$(function () {
  //Initialize Select2 Elements
  $(".select2").select2();
  //Money Euro
  $("[data-mask]").inputmask();
  //currency masking
  $(".cmbCurrency").inputmask({ alias : "currency", prefix: '', unmaskAsNumber: 'true' });

  //Date range picker
  $('#reservation').daterangepicker();

  //Date picker
  $('#datepicker1, #datepicker2').datepicker({
    autoclose: true
  });

  //iCheck for checkbox and radio inputs
  $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
    checkboxClass: 'icheckbox_minimal-blue',
    radioClass: 'iradio_minimal-blue'
  });
  //apply data table

  $('#demosi-table').DataTable( {
    "paging":   false,
    "ordering": false,
    "info":     false,
    "responsive": true,
  } );

  //parsley implementation
  $('#valid-form').parsley().on('field:validated', function() {
    var ok = $('.parsley-error').length === 0;
    $('.bs-callout-info').toggleClass('hidden', !ok);
    $('.bs-callout-warning').toggleClass('hidden', ok);
  })
  .on('form:submit', function() {
    return false; // Don't submit form for this demo
  });
});
</script>
@stop
