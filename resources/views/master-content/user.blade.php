@extends('layouts-master.master')

@section('tittle', 'FPTK')

@section('content')
<div class="row">
  <div class="col-sm-12">
    <h1>User</h1>    
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-success"  id="formtambah">
      <div class="box-header with-border">
        <h3 class="box-title"><b>Tambah Data User</b></h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <form method="post" id="formUser" class="form-horizontal" role="form">
          <div class="row">
          <input type="hidden" id="user_id" class="form-control" name="user_id">
            <div class="col-md-6">
              <div class="form-group">
                <label class="col-sm-6 control-label" for="username">
                  <span class="pull-left">
                    Username
                  </span>
                </label>
                <div class="col-sm-6">
                  <input type="text" placeholder="Username" id="username" class="form-control" name="username">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-6 control-label" for="nik">
                  <span class="pull-left">
                    NIK
                  </span>
                </label>
                <div class="col-sm-6">
                  <input type="text" placeholder="NIK" id="nik" class="form-control" name="nik">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-6 control-label" for="nama">
                  <span class="pull-left">
                    Nama
                  </span>
                </label>
                <div class="col-sm-6">
                  <input type="text" placeholder="Nama" id="nama" class="form-control" name="nama">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-6 control-label" for="email">
                  <span class="pull-left">
                    Email
                  </span>
                </label>
                <div class="col-sm-6">
                  <input type="email" placeholder="Email" id="email" class="form-control" name="email">
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label class="col-sm-6 control-label" for="job_code">
                  <span class="pull-left">
                    Job Code
                  </span>
                </label>
                <div class="col-sm-6">
                  <input type="text" placeholder="Job Code" id="job_code" class="form-control" name="job_code">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-6 control-label" for="area_code">
                  <span class="pull-left">
                    Area Code
                  </span>
                </label>
                <div class="col-sm-6">
                  <input type="text" placeholder="Area Code" id="area_code" class="form-control" name="area_code">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-6 control-label" for="ref_role">
                  <span class="pull-left">
                    Ref Code
                  </span>
                </label>
                <div class="col-sm-6">
                  <input type="text" placeholder="Ref Code" id="ref_role" class="form-control" name="ref_role">
                </div>
              </div>
            </div> <!-- /col-md-6 -->           
          </div>
        </form>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
      <button class="btn btn-default" type="button">Batal</button>
      <button class="btn btn-success pull-right" type="button" id="simpan">Simpan</button>
      <button class="btn btn-success pull-right" type="button" id="update">Update</button>
      </div><!-- /.box-footer -->
    </div>
  </div>
</div>
<div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">User Data</h3>
            </div>
            <div class="box-body" >
              <table class="table table-responsive table-hover" id="user-table" cellspacing="0">
                <thead>
                  <tr>
                    <th>User ID</th>
                    <th>Username</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Job</th>
                    <th>Area</th>
                    <th>Ref Role</th>
                    <th>Action</th>
                  </tr>
                </thead>
              </table>
            </div>
          </div>
        </div>
      </div>
@endsection
@section('javascript-form')
  <!-- datatables -->
  <script src="dist/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="dist/plugins/datatables/dataTables.bootstrap.min.js"></script>
@endsection
@push('js')
  <script type="text/javascript">
    $(function(){
      $("#user-table").DataTable({
            "scrollX": true,
            processing: true,
            serverSide: true,
            ajax: '{{ url("/user/getdata") }}',
            columns: [
              { data: 'user_id' },
              { data: 'username' },
              { data: 'nik' },
              { data: 'nama' },
              { data: 'email' },
              { data: 'job_code' },
              { data: 'area_code' },
              { data: 'ref_role' },
              { data: 'action', name: 'action', orderable: false, searchable: false}
            ]
      });
    });
  </script>
  <script src="{{asset('js/user.js')}}"></script>
  <script type="text/javascript">
    
  </script>
@endpush
