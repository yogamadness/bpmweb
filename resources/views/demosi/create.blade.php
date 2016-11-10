@extends('layouts-master.master')
@section('tittle', 'FPDM')
@section('cascanding')
  @include('demosi.assets_css')
@endsection

@section('contentheader_title')
  Formulir Perubahan Status Karyawan
@endsection

@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">Formulir Perubahan Status Karyawan - [[Non Staff Pemanen]]</h3>
      </div>
      {!! Form::open(array('id' => 'formDemosi', 'route' => 'demosi.store')) !!}

      @include('demosi.fields')

      {!! Form::close() !!}

    </div>
  </div>
</div>

@include('demosi.confirm')

@endsection
@section('javascript-form')
@include('demosi.assets_js')
@stop
