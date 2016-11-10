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
@section('page-script')
@include('demosi.assets_js')
@stop
