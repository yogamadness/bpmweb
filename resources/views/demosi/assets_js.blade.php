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

<!--
<script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/plugins/datatables/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js') }}" type="text/javascript"></script>
-->
<script src="{{ asset('/js/typeahead.bundle.js') }}" type="text/javascript"></script>

<script type="text/javascript">
$(function () {
  //Initialize Select2 Elements
  $(".select2").select2();
  //$(".destroy").select2('destroy');
  //Money Euro
  $("[data-mask]").inputmask();
  //currency masking
  $(".cmbCurrency").inputmask({ alias : "currency", prefix: '', unmaskAsNumber: 'true' });

  //Date range picker
  $('.reservation').daterangepicker();

  //Date range as a button
  $('#iPeriodePengangkatanKaryawanKontrak').daterangepicker(
      {
        ranges: {
          '1 Month': [moment().startOf('month'), moment().endOf('month')],
          '2 Month': [moment().startOf('month'), moment().add(1, 'month').endOf('month')],
          '3 Month': [moment().startOf('month'), moment().add(2, 'month').endOf('month')],
          '4 Month': [moment().startOf('month'), moment().add(3, 'month').endOf('month')],
          '5 Month': [moment().startOf('month'), moment().add(4, 'month').endOf('month')],
          '6 Month': [moment().startOf('month'), moment().add(5, 'month').endOf('month')],
          '12 Month': [moment().startOf('month'), moment().add(11, 'month').endOf('month')],
          '18 Month': [moment().startOf('month'), moment().add(17, 'month').endOf('month')],
          '24 Month': [moment().startOf('month'), moment().add(23, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate: moment()
      },
      function (start, end) {
        $('#iPeriodePengangkatanKaryawanKontrak span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
      }
  );

  //Date picker
  $('.datepicker').datepicker({
    autoclose: true,
    format: 'dd-M-yyyy',
  });

  //iCheck for checkbox and radio inputs
  $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
    checkboxClass: 'icheckbox_minimal-blue',
    radioClass: 'iradio_minimal-blue'
  });
  $('input[name="iSuratTeguran"]').iCheck('disable');
  //
@if($field_rules['iJenisPerubahanEmpWorkStatus'] !== 'disabled')
  $( "#iJenisPerubahan" )
  .change(function () {
    val = $("#iJenisPerubahan :selected").index();
    $( "#iJenisPerubahan option:selected" ).each(function() {
      switch (val) {
        case 0:
          $( "#iJenisPerubahanEmpWorkStatus" ).prop( "disabled", false );
          break;
        default:
          $( "#iJenisPerubahanEmpWorkStatus" ).prop( "disabled", true );
      }
    });
  })
  .change();
@endif
  //apply data table
/*
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
  */
});

//api for get perubahan status
var optCompany = {!! $getOptCompany !!};
$(".company").select2({ data: optCompany });

var optBusinessArea = {!! $getOptBusinessArea !!};
$(".business-area").select2({ data: optBusinessArea });

var optAfdeling = {!! $getOptAfdeling !!};
$(".afdeling").select2({ data: optAfdeling });

var optJobCode = {!! $getOptJobCode !!};
$(".job-code").select2({ data: optJobCode });

var optJobType = {!! $getOptJobType !!};
$(".job-type").select2({ data: optJobType });

var optEmpWorkStatus = {!! $getOptEmpWorkStatus !!};
$(".emp-work-status").select2({ data: optEmpWorkStatus });

//confirmaton
$('#submitBtn').click(function() {
     $('#cNik').text($('#iNikSap').val());
     $('#cNama').text($('#iNama').val());
     $('#cKeterangan').text($('#iKeterangan').val());
});

//submit
$('#submit').click(function(){
	console.log('submit');
	var validate = validateForm(1);
	if(validate == true) {
    	$('#formDemosi').submit();
    } else {
    	$('#modal-confirmation').modal('hide');
    }
});
$('#submit1').click(function(){
	console.log('submit');
	var validate = validateForm(0);
	if(validate == true) {
    	$('#formDemosi').submit();
    } else {
    	$('#modal-confirmation').modal('hide');
    }
});

//validateForm
function validateForm(i)
{
	if(i == 1) {
		console.log('validation ok');
    	return true;
	} else {
		console.log('validation failed');
		return false;
    }
}

function getDataEmp()
{
    var nik = $.trim($('#iNikSap').val());
	console.log(nik);
	if(nik!='') {
		$.ajax({
			url : "http://tap-flowdev.tap-agri.com/api/GetEmpByNIK",
			type : 'GET',
			data : {
				'nik': nik,
			},
			dataType : 'json',
			success : function(json) {
				if(json == 0) {
            console.log(0);
				} else {
          	console.log(json[0].COMP_NAME);
          	$('#iNama').val(json[0].EMPLOYEE_NAME);
          	$('#iTanggalMasukKerja').val(json[0].JOIN_DATE);
          	$('#iTanggalLahir').val(json[0].DOB);
          	$('input[name=iSuratTeguran]').filter('[value="7"]').iCheck('check');//attr('checked', true);
            $("#iPerusahaanOld").select2().val(json[0].COMP_CODE).trigger("change");
            $('#iBisnisAreaOld').select2().val(json[0].EST_CODE).trigger("change");
            $('#iAfdelingOld').select2().val(json[0].AFD_CODE).trigger("change");
            $('#iJabatanOld').select2().val(json[0].JOB_CODE).trigger("change");
            $('#iGolonganOld').select2().val(json[0].JOB_TYPE).trigger("change");
            $('#iStatusKaryawanOld').select2().val(json[0].STATUS).trigger("change");
            $('#iPerusahaanNew').select2().val(json[0].COMP_CODE).trigger("change");
            $('#iBisnisAreaNew').select2().val(json[0].EST_CODE).trigger("change");
            $('#iAfdelingNew').select2().val(json[0].AFD_CODE).trigger("change");
            $('#iJabatanNew').select2().val(json[0].JOB_CODE).trigger("change");
            $('#iGolonganNew').select2().val(json[0].JOB_TYPE).trigger("change");
            $('#iStatusKaryawanNew').select2().val(json[0].STATUS).trigger("change");
            $('#iUmur').val(json[0].AGE);
				}
			}
		});
	}
}
function getDataEmpProd()
{
    var nik = $.trim($('#iNikSap').val());
	console.log(nik);
	if(nik!='') {
		$.ajax({
			url : "http://tap-flowdev.tap-agri.com/api/GetEmpProductivity",
			type : 'GET',
			data : {
				'nik': nik,
			},
			dataType : 'json',
			success : function(json) {
				if(json == 0) {
            console.log(0);
				} else {
            console.log(json);
          	//console.log(json[0].BULAN);
          	//$('#iNama').val(json[0].BULAN);
          	//$('#iAtt3yAgo').val(json[0].KEHADIRAN);
          	//$('#iProd3yAgo').val(json[0].PRODUCTIVITY);
				}
			}
		});
	}
}

$(document).ready(function(){
    // Constructing the suggestion engine
    var nik = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.whitespace,
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        prefetch: {
          url: '{!! $urlGetEmpAutoComplete !!}',
        }
    });
    // Initializing the typeahead

    $('#iNikSap').typeahead({
        hint: true,
        highlight: true, /* Enable substring highlighting */
        minLength: 1 /* Specify minimum characters required for showing result */
    },
    {
        name: 'nik',
        limit: 10,
        source: nik
    })
    .on('typeahead:selected', function(getDataEmp,getDataEmpProd));
});

</script>
