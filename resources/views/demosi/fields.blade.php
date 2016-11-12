	<!-- Create Demosi Fields -->
<div class="box-body">

	<!-- panel header -->
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="form-group">
				<div class="col-md-6 md10">
					<label for="iNikNasional">NIK Nasional</label>
					<input type="text" class="form-control" placeholder="" id="iNikNasional" name="iNikNasional" value="{{ isset($dHeader) ? $dHeader->nik_national : ''  }}" {{ $field_rules['iNikNasional'] }}>
				</div>
				<div class="col-md-6">
					<label id="iTanggalMasuk">Tanggal Masuk Kerja:</label>
					<div class="input-group date">
						<div class="input-group-addon">
							<i class="fa fa-calendar"></i>
						</div>
						<input type="text" class="form-control pull-right datepicker" id="iTanggalMasukKerja" name="iTanggalMasukKerja"  value="{{ isset($dHeader) ? (date('d-M-Y', strtotime($dHeader->join_date))) : ''  }}" {{ $field_rules['iTanggalMasukKerja'] }}>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-6 md10" id="bloodhound">
					<label for="iNikSap">NIK SAP</label>
					<input type="text" class="form-control tags {{ isset($val_error) ? $val_error['iNikSap'] : '' }}" placeholder="" id="iNikSap" name="iNikSap" value="{{ isset($dHeader) ? $dHeader->nik_sap : ''  }}"  {{ $field_rules['iNikSap'] }}>
				</div>
				<div class="col-md-6">
					<label for="iTanggalEfektif">Tanggal Efektif Berlaku:</label>
					<!--Otomatis awal bulan jika karyawan non staff)-->
					<div class="input-group date">
						<div class="input-group-addon">
							<i class="fa fa-calendar"></i>
						</div>
						<input type="text" class="form-control pull-right tglberlaku" id="iTanggalEfektifBerlaku" name="iTanggalEfektifBerlaku"  value="{{ isset($dHeader) ? (date('d-M-Y', strtotime($dHeader->effective_date))) : ''  }}" {{ $field_rules['iTanggalEfektifBerlaku'] }}>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-6 md10">
					<label for="iNama">Nama</label>
					<input type="text" class="form-control" placeholder="" id="iNama" name="iNama"  value="{{ isset($dHeader) ? $dHeader->employee_name : ''  }}" {{ $field_rules['iNama'] }}>
				</div>
				<div class="col-md-6">
					<label for="iNomorPtk">Nomor PTK</label>
					<!-- nomor PTK ambil dari table PTK -->
					<select class="form-control select2" style="width: 100%;" id="iNomorPtk" name="iNomorPtk" {{ $field_rules['iNomorPtk'] }}>
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

							<select class="form-control select2" style="width: 100%;" id="iJenisPerubahan" name="iJenisPerubahan" {{ $field_rules['iJenisPerubahan'] }}>
								<option value="1">Pengangkatan Karyawan</option>
								<option value="2">Mutasi</option>
								<option value="3">Demosi</option>
								<option value="4">Promosi</option>
							</select>
						</div>
						<div class="col-xs-5 col-sm-5">
							<select class="form-control select2 emp-work-status"  id="iJenisPerubahanEmpWorkStatus" name="iJenisPerubahanEmpWorkStatus" {{ $field_rules['iJenisPerubahanEmpWorkStatus'] }}></select>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<label for="iPeriodePengangkatanKaryawanKontrak">Periode Pengangkatan Karyawan Kontrak</label>
					<div class="input-group">
						<button type="button" class="btn btn-default pull-right" id="iPeriodePengangkatanKaryawanKontrak" {{ $field_rules['iPeriodePengangkatanKaryawanKontrak'] }}>
							<span>
								<i class="fa fa-calendar"></i> Pilih Periode Pengangkatan
							</span>
							<i class="fa fa-caret-down"></i>
						</button>
					</div>
					{{--
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-calendar"></i>
						</div>
						<input type="text" class="form-control pull-right reservation" id="iPeriodePengangkatanKaryawanKontrak" name="iPeriodePengangkatanKaryawanKontrak" value="{{ isset($dHeader) ? $dHeader->effective_date : ''  }}" {{ $field_rules['iPeriodePengangkatanKaryawanKontrak'] }}>
					</div>
					--}}
				</div>
			</div>
		</div>
	</div>
	<!--end panel header -->
	<!-- panel detail -->
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="form-group">
				<div class="col-xs-12" id="no-more-tables">
					<table id="demosi-table" class="table table-bordered cf">
						<thead class="cf">
							<tr>
								<th class="text-center" style="width:20%;">Tanggal Lahir</th>
								<th class="text-center" style="width:20%;">Umur</th>
								<th colspan=3 class="text-center">Absen Finger Print<br>3 bulan terakhir</th>
@if($job_code === 'pemanen')
								<th colspan=3 class="text-center">Produktivitas Ton/HK Pemanen<br>(3 bulan terakhir)</th>
@endif
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center"><input id="iTanggalLahir" class="form-control" value="{{ isset($dHeader) ? (date('d-M-Y', strtotime($dHeader->dob)))  : ''  }}" {{ $field_rules['iTanggalLahir'] }}></td>
								<td class="text-center"><input id="iUmur" class="form-control" value="{{ isset($dHeader) ? $dHeader->age  : ''  }}" {{ $field_rules['iUmur'] }}></td>
								<td class="text-center" style="width:10%"><input id="iAtt3yAgo" name="iAtt3yAgo" class="form-control" value="{{ isset($dHeader) ? $dHeader->att3yago  : ''  }}" {{ $field_rules['iAtt3yAgo'] }}></td>
								<td class="text-center" style="width:10%"><input id="iAtt2yAgo" name="iAtt2yAgo" class="form-control" value="{{ isset($dHeader) ? $dHeader->att2yago  : ''  }}" {{ $field_rules['iAtt2yAgo'] }}></td>
								<td class="text-center" style="width:10%"><input id="iAtt1yAgo" name="iAtt1yAgo" class="form-control" value="{{ isset($dHeader) ? $dHeader->att1yago  : ''  }}" {{ $field_rules['iAtt1yAgo'] }}></td>
@if($job_code === 'pemanen')
								<td class="text-center" style="width:10%"><input id="iProd3yAgo" name="iProd3yAgo" class="form-control" value="{{ isset($dHeader) ? $dHeader->prod3yago  : ''  }}" {{ $field_rules['iProd3yAgo'] }}></td>
								<td class="text-center" style="width:10%"><input id="iProd2yAgo" name="iProd2yAgo" class="form-control" value="{{ isset($dHeader) ? $dHeader->prod2yago  : ''  }}" {{ $field_rules['iProd2yAgo'] }}></td>
								<td class="text-center" style="width:10%"><input id="iProd1yAgo" name="iProd1yAgo" class="form-control" value="{{ isset($dHeader) ? $dHeader->prod1yago  : ''  }}" {{ $field_rules['iProd1yAgo'] }}></td>
@endif

								<!--
								<td>
								<table class="table table-striped">
								<tbody>
								<tr>
							</tr>
						</tbody>
					</table>
				</td>
				<td>
				<table class="table table-striped">
				<tbody>
				<tr>
			</tr>
		</tbody>
	</table>
</td>
-->
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
						{{ date('Y', strtotime('-3 year')) }}
					</div>
					<div class="col-xs-2">
						<label><input type="text" class="form-control" placeholder="" id="iIpe3yAgo" name="iIpe3yAgo" value="{{ isset($dDetail) ? $dDetail['iIpe3yAgo'] : ''  }}" {{ $field_rules['iIpe3yAgo'] }}></label>
					</div>
					<div class="col-xs-1 text-right">
						{{ date('Y', strtotime('-2 year')) }}
					</div>
					<div class="col-xs-2">
						<label><input type="text" class="form-control" placeholder="" id="iIpe2yAgo" name="iIpe2yAgo" value="{{ isset($dDetail) ? $dDetail['iIpe2yAgo'] : ''  }}" {{ $field_rules['iIpe2yAgo'] }}></label>
					</div>
					<div class="col-xs-1 text-right">
						{{ date('Y', strtotime('-1 year')) }}
					</div>
					<div class="col-xs-2">
						<label><input type="text" class="form-control" placeholder="" id="iIpe1yAgo" name="iIpe1yAgo" value="{{ isset($dDetail) ? $dDetail['iIpe1yAgo'] : ''  }}" {{ $field_rules['iIpe1yAgo'] }}></label>
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-3">
						<label for="">Surat Teguran/Surat Peringatan</label>
					</div>
					<div class="col-xs-4">
						<!--<select class="form-control select2" style="width: 50%;">
						<option>Tidak ada</option>
						<option>ST</option>
						<option>SP1</option>
						<option>SP2</option>
						<option>SP3</option>
					</select>-->

					<label class="checkbox-inline">
						<input type="radio" class="minimal" id="iSuratTeguran" name="iSuratTeguran" {{ $field_rules['iSuratTeguran'] }} value=""> Tidak ada
					</label>
					<label class="checkbox-inline">
						<input type="radio" class="minimal" id="iSuratTeguran" name="iSuratTeguran" {{ $field_rules['iSuratTeguran'] }} value="7"> ST
					</label>
					<label class="checkbox-inline">
						<input type="radio" class="minimal" id="iSuratTeguran" name="iSuratTeguran" {{ $field_rules['iSuratTeguran'] }} value="8"> SP1
					</label>
					<label class="checkbox-inline">
						<input type="radio" class="minimal" id="iSuratTeguran" name="iSuratTeguran" {{ $field_rules['iSuratTeguran'] }} value="9"> SP2
					</label>
					<label class="checkbox-inline">
						<input type="radio" class="minimal" id="iSuratTeguran" name="iSuratTeguran" {{ $field_rules['iSuratTeguran'] }} value="10"> SP3
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
						<input type="text" class="form-control" size="5" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask id="iMasaBerlaku" name="iMasaBerlaku" value="{{ isset($dHeader) ? $dHeader->effective_date : ''  }}" {{ $field_rules['iMasaBerlaku'] }}>
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
								<select class="form-control select2 company" id="iPerusahaanOld" name="iPerusahaanOld" {{ $field_rules['iPerusahaanOld'] }}>
									{{ isset($dDetail['iPerusahaanOld']) ? '<option>'.$dDetail['iPerusahaanOld'].'</option>' : ''  }}
									{{ isset($dDetail['iPerusahaanNew']) ? '<option>'.$dDetail['iPerusahaanNew'].'</option>' : ''  }}
								</select>
							</td>
							<td>
								<select class="form-control select2 company" id="iPerusahaanNew" name="iPerusahaanNew" {{ $field_rules['iPerusahaanNew'] }}>
									{{ isset($dDetail['iPerusahaanOld']) ? '<option>'.$dDetail['iPerusahaanOld'].'</option>' : ''  }}
									{{ isset($dDetail['iPerusahaanNew']) ? '<option>'.$dDetail['iPerusahaanNew'].'</option>' : ''  }}
								</select>
							</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Bisnis Area/Divisi</td>
							<td>
								<select class="form-control select2 business-area" id="iBisnisAreaOld" name="iBisnisAreaOld" {{ $field_rules['iBisnisAreaOld'] }}>
									{{ isset($dDetail['iBisnisAreaOld']) ? '<option>'.$dDetail['iBisnisAreaOld'].'</option>' : ''  }}
									{{ isset($dDetail['iBisnisAreaNew']) ? '<option>'.$dDetail['iBisnisAreaNew'].'</option>' : ''  }}
								</select>
							</td>
							<td>
								<select class="form-control select2 business-area" id="iBisnisAreaNew" name="iBisnisAreaNew" {{ $field_rules['iBisnisAreaNew'] }}>
									{{ isset($dDetail['iBisnisAreaOld']) ? '<option>'.$dDetail['iBisnisAreaOld'].'</option>' : ''  }}
									{{ isset($dDetail['iBisnisAreaNew']) ? '<option>'.$dDetail['iBisnisAreaNew'].'</option>' : ''  }}
								</select>
							</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Afdeling/Departemen</td>
							<td>
								<select class="form-control select2 afdeling" id="iAfdelingOld" name="iAfdelingOld" {{ $field_rules['iAfdelingOld'] }}>
									{{ isset($dDetail['iAfdelingOld']) ? '<option>'.$dDetail['iAfdelingOld'].'</option>' : ''  }}
									{{ isset($dDetail['iAfdelingNew']) ? '<option>'.$dDetail['iAfdelingNew'].'</option>' : ''  }}
								</select>
							</td>
							<td>
								<select class="form-control select2 afdeling" id="iAfdelingNew" name="iAfdelingNew" {{ $field_rules['iAfdelingNew'] }}>
									{{ isset($dDetail['iAfdelingOld']) ? '<option>'.$dDetail['iAfdelingOld'].'</option>' : ''  }}
									{{ isset($dDetail['iAfdelingNew']) ? '<option>'.$dDetail['iAfdelingNew'].'</option>' : ''  }}
								</select>
							</td>
						</tr>
						<tr>
							<td>4</td>
							<td>Jabatan</td>
							<td>
								<select class="form-control select2 job-code" id="iJabatanOld" name="iJabatanOld" {{ $field_rules['iJabatanOld'] }}>
									{{ isset($dDetail['iJabatanOld']) ? '<option>'.$dDetail['iJabatanOld'].'</option>' : ''  }}
									{{ isset($dDetail['iJabatanNew']) ? '<option>'.$dDetail['iJabatanNew'].'</option>' : ''  }}
								</select>
							</td>
							<td>
								<select class="form-control select2 job-code"  id="iJabatanNew" name="iJabatanNew" {{ $field_rules['iJabatanNew'] }}>
									{{ isset($dDetail['iJabatanOld']) ? '<option>'.$dDetail['iJabatanOld'].'</option>' : ''  }}
									{{ isset($dDetail['iJabatanNew']) ? '<option>'.$dDetail['iJabatanNew'].'</option>' : ''  }}
								</select>
							</td>
						</tr>
						<tr>
							<td>5</td>
							<td>Golongan</td>
							<td>
								<select class="form-control select2 job-type" id="iGolonganOld" name="iGolonganOld" {{ $field_rules['iGolonganOld'] }}>
									{{ isset($dDetail['iGolonganOld']) ? '<option>'.$dDetail['iGolonganOld'].'</option>' : ''  }}
									{{ isset($dDetail['iGolonganNew']) ? '<option>'.$dDetail['iGolonganNew'].'</option>' : ''  }}
								</select>
							</td>
							<td>
								<select class="form-control select2 job-type" id="iGolonganNew" name="iGolonganNew" {{ $field_rules['iGolonganNew'] }}>
									{{ isset($dDetail['iGolonganOld']) ? '<option>'.$dDetail['iGolonganOld'].'</option>' : ''  }}
									{{ isset($dDetail['iGolonganNew']) ? '<option>'.$dDetail['iGolonganNew'].'</option>' : ''  }}
								</select>
							</td>
						</tr>
						<tr>
							<td>6</td>
							<td>Status Karyawan</td>
							<td>
								<select class="form-control select2 emp-work-status" id="iStatusKaryawanOld" name="iStatusKaryawanOld" {{ $field_rules['iStatusKaryawanOld'] }}>
									{{ isset($dDetail['iStatusKaryawanOld']) ? '<option>'.$dDetail['iStatusKaryawanOld'].'</option>' : ''  }}
									{{ isset($dDetail['iStatusKaryawanNew']) ? '<option>'.$dDetail['iStatusKaryawanNew'].'</option>' : ''  }}
								</select>
							</td>
							<td>
								<select class="form-control select2 emp-work-status" id="iStatusKaryawanNew" name="iStatusKaryawanNew" {{ $field_rules['iStatusKaryawanNew'] }}>
									{{ isset($dDetail['iStatusKaryawanOld']) ? '<option>'.$dDetail['iStatusKaryawanOld'].'</option>' : ''  }}
									{{ isset($dDetail['iStatusKaryawanNew']) ? '<option>'.$dDetail['iStatusKaryawanNew'].'</option>' : ''  }}
								</select>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!--end panel header -->
<!-- panel detail
<div class="panel panel-default">
	<div class="panel-heading">Perubahan Gaji dan Tunjangan</div>
	<div class="panel-body">
		<div class="form-group">
			<div class="col-xs-12">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th style="width:5%;">No</th>
							<th style="width:45%;">Keterangan</th>
							<th style="width:25%;">Lama</th>
							<th style="width:25%;">Baru</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Gaji Pokok</td>
							<td><input type="text" class="form-control cmbCurrency" disabled id="iGajiPokokOld" name="iGajiPokokOld" value="{{ isset($dDetail['iGajiPokokNew']) ? $dDetail['iGajiPokokNew'] : ''  }}"></td>
							<td><input type="text" class="form-control cmbCurrency" id="iGajiPokokNew" name="iGajiPokokNew" value="{{ isset($dDetail['iGajiPokokNew']) ? $dDetail['iGajiPokokNew'] : ''  }}"></td>
						</tr>
						<tr>
							<td>2</td>
							<td>Catu Beras</td>
							<td><input type="text" class="form-control cmbCurrency" disabled id="iCatuBerasOld" name="iCatuBerasOld" value="{{ isset($dDetail['iCatuBerasNew']) ? $dDetail['iCatuBerasNew'] : ''  }}"></td>
							<td>
								ambil dari defult value,..amount tdk boleh lebih dari salary
								<input type="text" class="form-control cmbCurrency" id="iCatuBerasNew" name="iCatuBerasNew" value="{{ isset($dDetail['iCatuBerasNew']) ? $dDetail['iCatuBerasNew'] : ''  }}"></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	-end panel header -->
	<!-- panel detail -->
	<div class="panel panel-default">
		<div class="panel-heading">Keterangan</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-xs-12">
					<textarea class="form-control" rows="3" placeholder="Enter ..." id="iKeterangan" name="iKeterangan" {{ $field_rules['iKeterangan'] }}>{{ isset($dDetail['iKeterangan']) ? $dDetail['iKeterangan'] : ''  }}</textarea>
				</div>
			</div>
		</div>
	</div>
@if($form_type === 'approve')
	<div class="panel panel-default">
		<div class="panel-heading">History Persetujuan & Diagram Proses</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-xs-12">
					<div class="nav-tabs-custom">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab_1" data-toggle="tab">History</a></li>
							<li><a href="#tab_2" data-toggle="tab">Diagram Process</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab_1">
								<textarea class="form-control" rows="3" placeholder="" id="iHistoryPersetujuan" name="iHistoryPersetujuan" {{ $field_rules['iHistoryPersetujuan'] }}>{{ isset($dDetail['iHistoryPersetujuan']) ? $dDetail['iHistoryPersetujuan'] : ''  }}</textarea>
							</div>
							<!-- /.tab-pane -->
							<div class="tab-pane" id="tab_2">
								-- flow proses approval dari BPM --
							</div>
							<!-- /.tab-pane -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">Catatan</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-xs-12">
					<textarea class="form-control" rows="5" placeholder="" id="iCatatanOld" name="iCatatanOld" {{ $field_rules['iCatatanOld'] }}>{{ isset($dDetail['iCatatanOld']) ? $dDetail['iCatatanOld'] : ''  }}</textarea>
					<textarea class="form-control" rows="3" placeholder="Enter ..." id="iCatatan" name="iCatatan" {{ $field_rules['iCatatan'] }}>{{ isset($dDetail['iCatatan']) ? $dDetail['iCatatan'] : ''  }}</textarea>
				</div>
			</div>
		</div>
	</div>
@endif
	<!--end panel detail -->

</div>
<!-- end 1st box body -->
<!-- start footer -->
<div class="box-footer">
	<div class="row">
		<div class="col-xs-6">
			<a href="{!! route('demosi.index') !!}" class="btn btn-default">Kembali</a>
		</div>
		<div class="col-xs-6 text-right">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="h_id" value="{{ isset($input['h_id']) ? $input['h_id'] : ''  }}">
@if($form_type === 'approve')
			<input type="hidden" name="form_type" value="approve">
			<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-ask" id="submitBtn">Tanya</button>
			<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-confirmation" id="submitBtn">Setuju</button>
			<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-rejection" id="submitBtn">Tolak</button>
@else
			<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-confirmation" id="submitBtn">Ajukan</button>
			<a href="{!! route('demosi.index') !!}" class="btn btn-danger">Batal</a>
@endif
		</div>
	</div>
</div>
