@extends('layouts-master.master')

@section('tittle', 'Example Bang')

@section('cascanding')
@endsection()

@section('content')
<h1>Welcome</h1>

<?php
	$data = Session::get('manu_name');
	var_dump($data);
	echo "halo";
?>

<!-- {{ Session::get('') }} -->

@section('javascript-form')
<script type="text/javascript">
	$(document).ready(function(){
		alert("oke");
	});
</script>
@endsection()