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
        <h3 class="box-title">Formulir Perubahan Status Karyawan - [[Non Staff Pemanen]]</h3>
      </div>
      {!! Form::model($dHeader,['id' => 'formDemosi', 'route' => ['demosi.update', $dHeader->h_id], 'method' => 'patch']) !!}
      {{-- Form::model($permit, ['route' => ['demosi.update', $permit->id], 'method' => 'patch']) --}}

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
