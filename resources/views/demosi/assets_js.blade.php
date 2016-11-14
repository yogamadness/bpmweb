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
<script src="{{ asset('/dist/plugins/datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
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
  var startDate;
  var endDate;
  $('#iPeriodePengangkatanKaryawanKontrak').daterangepicker(
       {
          startDate: moment(),
          endDate: moment().add('days', 29),
          minDate: '01/01/2016',
          maxDate: '12/31/2018',
          dateLimit: { days: 60 },
          showDropdowns: false,
          showWeekNumbers: false,
          timePicker: false,
          timePickerIncrement: 1,
          timePicker12Hour: true,
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
          opens: 'left',
          buttonClasses: ['btn btn-default'],
          applyClass: 'btn-small btn-primary',
          cancelClass: 'btn-small',
          format: 'DD-MMM-YYYY',
          separator: ' ke ',
          locale: {
              applyLabel: 'Kirim',
              fromLabel: 'Dari',
              toLabel: 'Ke',
              customRangeLabel: 'Pilih Periode',
              daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr','Sa'],
              monthNames: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'Desember'],
              firstDay: 1
          }
       },
       function(start, end) {
        console.log("Callback has been called!");
        $('#iPeriodePengangkatanKaryawanKontrak span').html(start.format('DD-MMM-YYYY') + ' - ' + end.format('DD-MMM-YYYY'));
        startDate = start;
         endDate = end;
         $("#sqldate_from").val(startDate);
         $("#sqldate_to").val(endDate);
       }
    );

  //Date picker
  $('.datepicker').datepicker({
    autoclose: true,
    format: 'dd-M-yyyy',
  });
  $('.tglberlaku').datetimepicker({
    minDate: moment().add('h', 1),
    format: 'DD-MMM-YYYY'
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
// $( "#iNomorPtk" )
// .change(function () {
//   val = $("#iNomorPtk :selected").index();
//   $( "#iNomorPtk option:selected" ).each(function() {
//     if (val == 0) {
//       $( "#iPerusahaanNew" ).prop( "disabled", true );
//       $( "#iBisnisAreaNew" ).prop( "disabled", true );
//       $( "#iAfdelingNew" ).prop( "disabled", true );
//       $( "#iJabatanNew" ).prop( "disabled", true );
//       //enable if "tidak ada PTK"
//       $( "#iGolonganNew" ).prop( "disabled", false );
//       $( "#iStatusKaryawanNew" ).prop( "disabled", false );
//     }
//   });
// })
// .change();
});

//api for get perubahan status
var optCompany = {!! $getOptAfdeling !!};
//$(".company").select2({ data: optCompany });
$('#iPerusahaanNew').select2({ data: optCompany }).on('change', function() {
    $('#iBisnisAreaNew').html('').select2({data: {id:null, text: null}});
	var val = $(this).val();
	var filtered = $(optCompany).filter(function(index){
        return this.id == val;
    });
    if(filtered.length > 0){
    	//console.log(filtered[0]['data']);
    	$('#iBisnisAreaNew').select2({data:filtered[0]['data']}).on('change', function() {
    		$('#iAfdelingNew').html('').select2({data: {id:null, text: null}});
			var val = $(this).val();
			var filtered2 = $(filtered[0]['data']).filter(function(index){
        		return this.id == val;
    		});
    		if(filtered2.length > 0){
    			//console.log(filtered2[0]['data']);
    			$('#iAfdelingNew').select2({data:filtered2[0]['data']});
    		}
		}).trigger('change');

    }
}).trigger('change');

<?php
/*
var optBusinessArea = {!! $getOptBusinessArea !!};
//$(".business-area").select2({ data: optBusinessArea });

var optAfdeling = {!! $getOptAfdeling !!};
$(".afdeling").select2({ data: optAfdeling });
*/
?>
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
    if(nik!='') {
      $.ajax({
        url : "http://tap-flowdev.tap-agri.com/api/getEmpByNIK",
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
            $('#iNama').val(json[0].EMPLOYEE_NAME);
            $('#iTanggalMasukKerja').val(json[0].JOIN_DATE);
            $('#iTanggalLahir').val(json[0].DOB);
            //attr('checked', true);
            switch (json[0].PSS) {
              case 7:
              $('input[name=iSuratTeguran]').filter('[value="7"]').iCheck('check');
              break;
              case 8:
              $('input[name=iSuratTeguran]').filter('[value="8"]').iCheck('check');
              break;
              case 9:
              $('input[name=iSuratTeguran]').filter('[value="9"]').iCheck('check');
              break;
              case 10:
              $('input[name=iSuratTeguran]').filter('[value="10"]').iCheck('check');
              break;
              default:
              $('input[name=iSuratTeguran]').filter('[value=""]').iCheck('check');
            }

            if (json[0].PSS > "") {
              $("#iMasaBerlaku").select2().val(json[0].EFFECTIVE_DATE).trigger("change");
            }
          
            $("#iPerusahaanOld").val(json[0].COMP_NAME);
            $('#iBisnisAreaOld').val(json[0].EST_NAME);
            $('#iAfdelingOld').val(json[0].AFD_NAME);
            $('#iJabatanOld').val(json[0].JOB_CODE);
            $('#iGolonganOld').val(json[0].JOB_TYPE);
            $('#iPerusahaanNew').select2().val(json[0].COMP_NAME).trigger("change");
            $('#iBisnisAreaNew').select2().val(json[0].EST_NAME).trigger("change");
            $('#iAfdelingNew').select2().val(json[0].AFD_NAME).trigger("change");
            $('#iJabatanNew').select2().val(json[0].JOB_CODE).trigger("change");
            $('#iGolonganNew').select2().val(json[0].JOB_TYPE).trigger("change");
            $('#iUmur').val(json[0].AGE);
           
            arr = jQuery.grep(optEmpWorkStatus, function( a ) { return a.code === json[0].STATUS; });
            $('#iStatusKaryawanOld').val(arr[0]['text']);
            $('#iStatusKaryawanNew').select2().val(arr[0]['text']).trigger("change");
          }
        }
      });

      $.ajax({
        url : "http://tap-flowdev.tap-agri.com/api/getEmpProductivity",
        type : 'GET',
        data : {
          'nik': nik,
        },
        dataType : 'json',
        success : function(json) {
          if(json !== 0) {
            //console.log(json);
          	var json_sorted = sortJSON(json,'BULAN',true);
            //console.log(json_sorted);
          
            $('#iAtt3yAgo').val(json_sorted[0].KEHADIRAN);
            $('#iAtt2yAgo').val(json_sorted[1].KEHADIRAN);
            $('#iAtt1yAgo').val(json_sorted[2].KEHADIRAN);
            $('#iProd3yAgo').val(json_sorted[0].PRODUCTIVITY);
            $('#iProd3yAgo').val(json_sorted[1].PRODUCTIVITY);
            $('#iProd3yAgo').val(json_sorted[2].PRODUCTIVITY);
          }
        }
      });
    }
  }

function sortJSON(data, key, asc) {
    return data.sort(function(a, b) {
        var x = a[key]; var y = b[key];
        if (asc === true ) { return ((x < y) ? -1 : ((x > y) ? 1 : 0)); }
        else { return ((x > y) ? -1 : ((x < y) ? 1 : 0)); }
    });
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
  .on('typeahead:selected', getDataEmp);
});
</script>
