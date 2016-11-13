@extends('layouts-master.master')
@section('tittle', 'FPDM')
@section('cascanding')
  @include('demosi.assets_css')
@endsection

@section('content')
<div class="row">
  <div class="col-sm-12">
    <h1>Formulir Perubahan Status Karyawan - {{ Session::get('area_code') }}
    </h1>
  </div>
</div>
<div class="row">
  <div class="col-xs-12">
    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">Formulir Persetujuan Perubahan Status Karyawan {{ Session::get('area_code') }}</h3>
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
@section('javascript-form')
  @include('demosi.assets_js')
@stop
