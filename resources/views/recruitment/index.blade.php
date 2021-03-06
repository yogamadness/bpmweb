@extends('layouts-master.master')

@section('page-css')
    <link href="{{ asset('/plugins/datatables/dataTables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('plugins/datatables/extensions/Responsive/css/dataTables.responsive.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="row">
  <div class="col-sm-12">
    <h1>Formulir Penginputan Data Personalia
    </h1>

  </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">HC - Outstanding Tasks</h3>
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>
            </div>

            <div class="box-body">
            <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('sanksi.create') !!}">Add New</a>
                    @include('sanksi.table')
            </div>
        </div>
    </div>
</div>
@endsection
@section('javascript-form')
<script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/plugins/datatables/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js') }}" type="text/javascript"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" type="text/javascript"></script>
<script src="{{ asset('/plugins/slimScroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/plugins/fastclick/fastclick.js') }}" type="text/javascript"></script>    

<script type="text/javascript">
  $(document).ready(function (){
       var table = $('table.table').DataTable({
          'columnDefs': [{
             'targets': [0, 1],
             'searchable': false,
             'orderable': false,
             'className': 'dt-body-center',
             'render': function (data, type, full, meta){
                 return '<input type="checkbox" name="id[]" value="' + $('<div/>').text(data).html() + '">';
             }
          }],
          'responsive':[true],
          'order': [[2, 'asc']]
       });
    
       // Handle click on "Select all" control
       $('#r-select-all, #a-select-all').on('click', function(){
          // Get all rows with search applied
          var rows = table.rows({ 'search': 'applied' }).nodes();
          // Check/uncheck checkboxes for all rows in the table
          $('input[type="checkbox"]', rows).prop('checked', this.checked);
       });
       
       
       // Handle click on checkbox to set state of "Select all" control
       $('#example1 tbody').on('change', 'input[type="checkbox"]', function(){
          // If checkbox is not checked
          if(!this.checked){
             var el = $('#r-select-all, #a-select-all').get(0);
             // If "Select all" control is checked and has 'indeterminate' property
             if(el && el.checked && ('indeterminate' in el)){
                // Set visual state of "Select all" control 
                // as 'indeterminate'
                el.indeterminate = true;
             }
          }
       });
    
       // Handle form submission event
       $('#frm-example').on('submit', function(e){
          var form = this;
    
          // Iterate over all checkboxes in the table
          table.$('input[type="checkbox"]').each(function(){
             // If checkbox doesn't exist in DOM
             if(!$.contains(document, this)){
                // If checkbox is checked
                if(this.checked){
                   // Create a hidden element 
                   $(form).append(
                      $('<input>')
                         .attr('type', 'hidden')
                         .attr('name', this.name)
                         .val(this.value)
                   );
                }
             } 
          });
       });
    
    }); 
</script>
@stop
