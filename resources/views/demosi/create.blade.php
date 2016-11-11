@extends('layouts-master.master')
@section('tittle', 'FPDM')
@section('cascanding')
  @include('demosi.assets_css')
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
        @if($job_code === 'pemanen')
        <h3 class="box-title">Formulir Perubahan Status Karyawan - Pemanen</h3>
        @endif
        @if($job_code === 'non_pemanen')
        <h3 class="box-title">Formulir Perubahan Status Karyawan - Non Pemanen</h3>
        @endif
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
