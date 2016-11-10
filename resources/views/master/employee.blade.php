@extends('layouts.master')

@section('title', 'Employees')

@section('content')
<div class="wrapper">
  <div class="content-wrapper">
    <section class="content-header">
      <h1>Employees
        <button type="button" name="button" class="btn btn-md" id="btn-tambah">Add Data &nbsp; <i class="fa fa-plus"></i></button>
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <!-- general form elements -->
          <div class="box box-primary"  id="formtambah" style="display:none">
            <div class="box-header with-border">
              <h3 class="box-title">Add Data</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
            <form id="form-employees">
              <div class="box-body" >
                <input type="hidden" name="id" id="txtid">
                <div class="form-group">
                  <label for="txtkode">Code</label>
                  <input type="text" class="form-control" id="txtkode" name="kode" placeholder="Code">
                </div>
                <div class="form-group">
                  <label for="txtname">Nama</label>
                  <input type="text" class="form-control" id="txtname" name="Name" placeholder="Name">
                </div>
                <div class="form-group">
                  <label>Gender</label>
                  <div class="form-group">
                    <label class="radio-inline">
                      <input type="radio" name="Gender" id="radio1" class="rb" value="Male"> Male
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="Gender" id="radio2" class="rb" value="Female"> Female
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="txtaddress">Address </label>
                  <div>
                    <textarea id="txtaddress" name="Address" class="form-control" placeholder="Address"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="txtemail">Email</label>
                  <input type="text" class="form-control" id="txtemail" name="Email" placeholder="Email">
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="button" value="save" class="btn btn-primary btn-flat" id="btn-save"> Save <i class="fa fa-floppy-o"></i></button>
                <button type="button" value="update" class="btn btn-primary btn-flat" id="btn-update"> Update <i class="fa fa-floppy-o"></i></button>
                <button type="button" value="cancel" class="btn btn-default btn-flat" id="btn-cancel" onclick="hide()">Cancel <i class="fa fa-ban"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Employees Data</h3>
            </div>
            <div class="box-body" >
              <table class="table table-responsive table-hover" id="employees-table" cellspacing="0">
                <thead>
                  <tr>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Action</th>
                  </tr>
                </thead>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
@endsection

@push('js')
<script type="text/javascript">
	$(function(){
		$("#employees-table").DataTable({
          "scrollX": true,
          processing: true,
          serverSide: true,
          ajax: '{{ url("/employee/getdata") }}',
          columns: [
            { data: 'kode' },
            { data: 'name' },
            { data: 'gender' },
            { data: 'address' },
            { data: 'email' },
            { data: 'action', name: 'action', orderable: false, searchable: false}
          ]
		});
	});
</script>
<script src="{{asset('js/employee.js')}}"></script>
<script type="text/javascript">
  function edit2(id){
   $('#btn-save').hide();
   $('#formtambah').show('slow');
   $('#btn-update').show();
   $('#btn-tambah').hide('slow');

    $.ajax({
        type: "get",
        url: url + '/' + id,
        success: function(data) {
          console.log(data);
          $('#txtid').val(data.id);
          $('#txtkode').val(data.kode);
          $('#txtname').val(data.name).focus();
          if (data.gender == 'Male') {
            $('#radio1').iCheck('check');
          } else {
            $('#radio2').iCheck('check');
          }
          $('#txtaddress').val(data.address);
          $('#txtemail').val(data.email);
        },
        error: function(data) {
            alert('Cek Your Connection Data', data);
        }
    });
  }
</script>
@endpush
