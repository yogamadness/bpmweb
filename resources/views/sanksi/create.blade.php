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
    <h1>Formulir Perubahan Status Karyawan
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
              {!! Form::open(array('id' => 'fields1','class' => 'form-horizontal', 'route' => 'sanksi.store')) !!}
                @include('sanksi.fields')
              {!! Form::close() !!}

              {!! Form::open(array('id' => 'fields2','class' => 'form-horizontal', 'route' => 'sanksi.store')) !!}
                @include('sanksi.fields2')
              {!! Form::close() !!}

              {!! Form::open(array('id' => 'fields3','class' => 'form-horizontal', 'route' => 'sanksi.store')) !!}
                @include('sanksi.fields3')
              {!! Form::close() !!}

              {!! Form::open(array('id' => 'fields4','class' => 'form-horizontal', 'route' => 'sanksi.store')) !!}
                @include('sanksi.fields4')
              {!! Form::close() !!}


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
    $(function () {
        //Initialize Select2 Elements
        $(".jnsurat").select2({
          placeholder: "pilih surat"
        });
        $(".offense").select2({
          placeholder: "jenis pelanggaran"
        });
        //Prepare Cloning Jenis Pelanggaran
        var id = 0;
        var max = 10;
        jQuery('#replicate').click(function () {
            //destroy select2
            $(".offense").select2('destroy');
            //clone div#clones
            var button = $('#clones').clone(true);

            id++;
            button.find('input').val('');
            button.removeAttr('id');
            button.insertAfter('#clones');
            button.attr('id', 'clones_' + id);
            //create select2
            $(".offense").select2({
              placeholder: "jenis pelanggaran"
            });

        });
        jQuery('.btn-remove').click(function (e) {
            jQuery("#clones_"+id).remove();
            id--;
            e.preventDefault();
        });

        //Change title based on select value
        $( "#cmbJnsSrt" )
        .change(function () {
          var str = "";
          var divs;
          var val = $("#cmbJnsSrt :selected").index();
          switch (val) {
            case 0:
            case 1:
            case 2:
            case 3:
                $("#fields1").show();
                $("#fields2").hide();
                $("#fields3").hide();
                $("#fields4").hide();
              break;
            case 4:
            case 5:
                $("#fields1").hide();
                $("#fields2").show();
                $("#fields3").hide();
                $("#fields4").hide();
              break;
            case 6:
                $("#fields1").hide();
                $("#fields2").hide();
                $("#fields3").show();
                $("#fields4").hide();
              break;
            case 7:
                $("#fields1").hide();
                $("#fields2").hide();
                $("#fields3").hide();
                $("#fields4").show();
              break;
            default:
                $("#fields1").show();
                $("#fields2").hide();
                $("#fields3").hide();
                $("#fields4").hide();
          }

          $( "#cmbJnsSrt option:selected" ).each(function() {
            str += $( this ).text() + " ";
          });
          $( "#titlesurat" ).text( str );
        })
        .change();

        //show div#fields based on select value


        //Money Euro
        $("[data-mask]").inputmask();
        //currency masking
        $(".cmbCurrency").inputmask({ alias : "currency", prefix: '', unmaskAsNumber: 'true' });

        //Date range picker
        $('#reservation').daterangepicker();

        //Date picker
        $('.datepicker2, ').datepicker({
          autoclose: true
        });

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });

        
});
</script>
@stop
