@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Permit
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('permits.show_fields')
                    <a href="{!! route('permits.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
