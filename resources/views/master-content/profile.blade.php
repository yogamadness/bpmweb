@extends('layouts.master')

@section('title', 'Profile')

@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>Profile
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-4">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="dist/img/user1-128x128.jpg" alt="User profile picture">
              <h3 class="profile-username text-center">Roni Romdoni</h3>
              <p class="text-muted text-center">Jabatan</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Blabla</b> <a class="pull-right">1,322</a>
                </li>
                <li class="list-group-item">
                  <b>Blabla</b> <a class="pull-right">543</a>
                </li>
                <li class="list-group-item">
                  <b>Blabla</b> <a class="pull-right">13,287</a>
                </li>
              </ul>

              <!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
            </div><!-- /.box-body -->
          </div><!-- /.box -->
      </div><!-- /.row -->

    </section><!-- /.content -->
  </div>
@endsection