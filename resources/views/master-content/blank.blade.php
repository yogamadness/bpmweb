@extends('layouts-master.master')

@section('tittle', 'Example Bang')

@section('cascanding')
@endsection()

@section('content')
<h1>Welcome</h1>
<p>{{ Session::get('email') }}</p>
@endsection()

@section('javascript-form')
<script type="text/javascript">
	$(document).ready(function(){
		alert("oke");
	});
</script>
@endsection()