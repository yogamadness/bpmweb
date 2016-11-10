@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    You are logged in! Session = {{ Session::get('session_id') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<script type="text/javascript">
$(document).ready(function() {
  // function looping() {
  //   var loop = 1;
  //       setTimeout(looping1, 5000);
  //       console.log("tes");
  // }
  // function looping1() {
  // looping();
  // }
  // looping();
console.log("tes");
});



  //   $.ajax({
  //       type: "get",
  //       url: url + '/' + id,
  //       success: function(data) {
  //         console.log(data);
  //       },
  //       error: function(data) {
  //           alert('Cek Your Connection Data', data);
  //       }
  //   });
  // }
</script>
@endpush
