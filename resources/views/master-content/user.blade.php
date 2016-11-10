@extends('layouts-master.master')

@section('tittle', 'FPTK')

@section('cascanding')
<link rel="stylesheet" href="dist/plugins/datetimepicker/css/bootstrap-datetimepicker.min.css">
@endsection()

@section('content')
<div class="row">
  <div class="col-sm-12">
    <h1>User 
    </h1>
    
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-success"  id="formtambah">
      <!-- Permintaan Tenaga Kerja -->
      <div class="box-header with-border">
        <h3 class="box-title"><b>Tambah Data User</b></h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <form method="post" id="formUser" class="form-horizontal" role="form">
          
        </form>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
      <button class="btn btn-default" type="submit">Batal</button>
      <button class="btn btn-success pull-right" type="submit" id="ajukan">Simpan</button>
      </div><!-- /.box-footer -->
    </div>
  </div>
</div>
@endsection

@section('javascript-form')
<script type="text/javascript">
  
</script>
@endsection()