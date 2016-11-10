@extends('layouts.app')

@section('page-css')
@include('demosi.assets_css')
@endsection

@section('htmlheader_title')
Formulir Perubahan Status Karyawan
@endsection
@section('contentheader_title')
Formulir Perubahan Status Karyawan
@endsection

@section('main-content')
<div class="row">
  <div class="col-xs-12">
    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">Formulir Persetujuan Perubahan Status Karyawan - [[Non Pemanen]]</h3>
      </div>
      {!! Form::open(array('id' => 'formDemosi', 'url' => 'demosi/store_approve', 'method' => 'put')) !!}

      @include('demosi.fields')

      {!! Form::close() !!}

    </div>
  </div>
</div>
@include('demosi.ask')
@include('demosi.confirm')
@include('demosi.reject')

@endsection
@section('page-script')
@include('demosi.assets_js')
@stop
