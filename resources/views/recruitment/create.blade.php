@extends('layouts-master.master')
@section('cascanding')
    <link href="{{ asset('/plugins/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/plugins/datepicker/datepicker3.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/plugins/iCheck/all.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/plugins/colorpicker/bootstrap-colorpicker.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/plugins/timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="row">
  <div class="col-sm-12">
    <h1>Formulir Penginputan data personalia karyawan
    </h1>

  </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Formulir Penginputan Data Surat Sanksi dan Surat Panggilan</h3>
            </div>
            <div class="box-body">
              <div class="panel panel-default">
            		<div class="panel-body">
            			<div class="form-group">
            				<label class="col-sm-2">Jenis Surat Sanksi</label>
            				<div class="col-sm-4" id="cont">
            					<select class="form-control select2 jnsurat" style="width: 100%;" id="cmbJnsSrt" placeholder="">
            						<option value="1">Surat Teguran</option>
            						<option value="2">Surat Peringatan I</option>
            						<option value="3">Surat Peringatan II</option>
            						<option value="4">Surat Peringatan III</option>
                        <option value="5">Surat Panggilan I</option>
            						<option value="6">Surat Panggilan II</option>
            						<option value="7">Surat Pemberitahuan</option>
            						<option value="8">Surat Keputusan</option>
            					</select>
            				</div>
            			</div>
            		</div>
            	</div>
              <div class="panel panel-default">
            		<div class="panel-body">
            			<div class="form-group">
            				<div class="col-md-12">
            					<h1 class="text-center" id="titlesurat"></h1>
            					<input type="text" class="form-control" placeholder="">
            				</div>
            			</div>
            		</div>
            	</div>
            </div>
              

        </div>
    </div>
</div>
@endsection
@section('javascript-form')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" type="text/javascript"></script>
<script src="{{ asset('/plugins/select2/select2.full.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/plugins/input-mask/jquery.inputmask.bundle.js') }}" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js" type="text/javascript"></script>
<script src="{{ asset('/plugins/daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>
<script src="{{ asset('/plugins/datepicker/bootstrap-datepicker.js') }}" type="text/javascript"></script>
<script src="{{ asset('/plugins/slimScroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/plugins/iCheck/icheck.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/plugins/fastclick/fastclick.js') }}" type="text/javascript"></script>

<script type="text/javascript">
// {!! Form::open(['route' => 'sanksi.store']) !!}
//
// {!! Form::close() !!}
   
</script>
@stop
