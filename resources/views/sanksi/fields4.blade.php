<div class="box-body">
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="form-group">
				<div class="col-md-6 md10">
					<label>NIK Nasional</label>
					<input type="text" class="form-control" placeholder="">
				</div>
				<div class="col-md-6">
					<label>NIK SAP</label>
					<input type="text" class="form-control" placeholder="" id="tags">
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-6 md10">
					<label>Nama Lengkap Karyawan</label>
					<input type="text" class="form-control" placeholder="" id="tags" disabled>
				</div>
				<div class="col-md-6">
					<label>Jenis Kelamin</label>
					<!-- nomor PTK ambil dari table -->
					<select class="form-control select2" style="width: 100%;" disabled>
						<option>Laki Laki</option>
						<option>Perempuan</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-6 md10">
					<label>Jabatan</label>
					<select class="form-control select2" style="width: 100%;" disabled>
						<option>Pemanen</option>
						<option>Tukang Rawat</option>
						<option>dll</option>
					</select>
				</div>
				<div class="col-md-6">
					<label>Golongan Karyawan</label>
					<select class="form-control select2" style="width: 100%;" disabled>
						<option>IA</option>
						<option>IB</option>
						<option>IC</option>
						<option>ID</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-6 md10">
					<label>Status Karyawan</label>
					<select class="form-control select2" style="width: 100%;" disabled>
						<option>GBSM Inti 1</option>
						<option>GBSM Inti 2</option>
						<option>GBSM Inti 3</option>
						<option>GBSM Inti 4</option>
					</select>
				</div>
				<div class="col-md-6">
					<label>PT</label>
					<!--Otomatis awal bulan jika karyawan non staff)-->
					<select class="form-control select2" style="width: 100%;" disabled>
						<option>PT GBSM</option>
						<option>PT CSM</option>
						<option>PT TBSM</option>
						<option>PT BSM</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-6 md10">
					<label>Bisnis Area</label>
					<select class="form-control select2" style="width: 100%;" disabled>
						<option>GBSM Inti 1</option>
						<option>GBSM Inti 2</option>
						<option>GBSM Inti 3</option>
						<option>GBSM Inti 4</option>
					</select>
				</div>
				<div class="col-md-6">
					<label>Afdeling</label>
					<select class="form-control select2" style="width: 100%;" disabled>
						<option>B</option>
						<option>C</option>
						<option>D</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-6 md10">
					<label>Tanggal Surat:</label>
					<!--Otomatis awal bulan jika karyawan non staff)-->
					<div class="input-group date">
						<div class="input-group-addon">
							<i class="fa fa-calendar"></i>
						</div>
						<input type="text" class="form-control pull-right" id="datepicker2" style="width: 100%;">
					</div>
				</div>
				<div class="col-md-6">
					<label>Masa Berlaku Surat:</label>
					<!--Otomatis awal bulan jika karyawan non staff)-->
					<div class="input-group date">
						<div class="input-group-addon">
							<i class="fa fa-calendar"></i>
						</div>
						<input type="text" class="form-control pull-right" id="datepicker2" style="width: 100%;">
					</div>
				</div>
			</div>
		</div>
	</div>
	
  <div class="panel panel-default">
		<div class="panel-body">
			<div class="col-md-12">
				<label><h2>Keterangan/Penjelasan</h2></label>
				<div class="form-group">
					fields 4
				</div>
			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="col-md-12">
				<label><h2>Keterangan/Penjelasan</h2></label>
				<div class="form-group">
					<textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- start footer -->
<div class="box-footer">
	<div class="row">
		<div class="col-xs-6">
			<a href="{!! route('sanksi.index') !!}" class="btn btn-default">Kembali</a>
		</div>
		<div class="col-xs-6 text-right">
			<button type="submit" class="btn btn-success">Ajukan</button>
			<a href="{!! route('sanksi.index') !!}" class="btn btn-danger">Batal</a>
		</div>
	</div>
</div>
