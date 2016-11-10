var url         = "user";

$(document).ready(function() {
  $('#update').hide();
});

function ajaxSetup(){
  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
      }
  });
}

function edit(id){
     $('#save').hide();
     $('#update').show();
      $.ajax({
          type: "get",
          url: url + '/' + id,
          success: function(data) {
            
          },
          error: function(data) {
              alert('Cek Your Connection Data', data);
          }
      });
    }

function hapus(ID) {
    ajaxSetup();
    $.ajax({
        type: "delete",
        url: url + '/' + ID,
        success: function(data) {
          if (data.success ==  true ) {
            $("#employees-table").DataTable().ajax.reload()
            hide();
          }else{
            alert("Gagal");
          }
        },
        error: function(data) {
            alert('Cek Your Connection Data', data);
        }
    });
}

$("#btn-save").click(function() {
    ajaxSetup();
    var formData = $("#form-employees").serialize();
    $.ajax({
        type: "POST",
        url: url + '/save',
        data: formData,
        success: function(data) {
          if (data.success ==  true ) {
            $("#employees-table").DataTable().ajax.reload();
              $('#formtambah').hide('slow');
              $('#btn-tambah').show('slow');
              hide();
          }else {
              alert("Gagal");
          }
        },
        error: function(data) {
            alert('Cek Your Connection Data', data);
        }
    });
});

$("#btn-update").click(function() {
    ajaxSetup();
    var ID = $('#txtid').val();
    var formData = $("#form-employees").serialize();
    console.log(formData);
    $.ajax({
        type: "POST",
        url: url + '/' + ID,
        data: formData,
        success: function(data) {
          if (data.success ==  true ) {
            $("#employees-table").DataTable().ajax.reload()
            hide();
            $('#formtambah').hide('slow');
            $('#btn-tambah').show('slow');
          }else {
              alert("Gagal");
          }
        },
        error: function(data) {
              alert('Cek Your Connection Database', data);
        }
    });
});

function hide() {
  localStorage.clear();
}

window.onload = function() {
  // Check for LocalStorage support.
  if (localStorage) {
    $("#username").keyup(function() {
      var username = $('#username').val();
      localStorage.setItem('Username', username)
    });
    $("#nik").keyup(function() {
      var nik = $('#nik').val();
      localStorage.setItem('Nik', nik)
    });
    $("#nama").keyup(function() {
      var nama = $('#nama').val();
      localStorage.setItem('Nama', nama)
    });
    $("#email").keyup(function() {
      var email = $('#email').val();
      localStorage.setItem('Email', email)
    });
    $("#job_code").keyup(function() {
      var job_code = $('#job_code').val();
      localStorage.setItem('Job_code', job_code)
    });
    $("#area_code").keyup(function() {
      var area_code = $('#area_code').val();
      localStorage.setItem('Area_code', area_code)
    });
    $("#ref_role").keyup(function() {
      var ref_role = $('#ref_role').val();
      localStorage.setItem('Ref_role', ref_role)
    });

    //GET DATA FROM LOCAL STORAGE
    var username = localStorage.getItem('Username');
    if (username != "undefined" || username != "null") {
      $('#username').val(username);
    } else{
      $('#username').val("");
    }
    var nik = localStorage.getItem('Nik');
    if (nik != "undefined" || nik != "null") {
      $('#nik').val(nik);
    } else{
      $('#nik').val("");
    }
    var name = localStorage.getItem('Nama');
    if (name != "undefined" || name != "null") {
      $('#nama').val(name);
    } else{
      $('#nama').val("");
    }
    var email = localStorage.getItem('Email');
    if (email != "undefined" || email != "null") {
      $('#email').val(email);
    } else{
      $('#email').val("");
    }
    var job_code = localStorage.getItem('Job_code');
    if (job_code != "undefined" || job_code != "null") {
      $('#job_code').val(job_code);
    } else{
      $('#job_code').val("");
    }
    var area_code = localStorage.getItem('Area_code');
    if (area_code != "undefined" || area_code != "null") {
      $('#area_code').val(area_code);
    } else{
      $('#area_code').val("");
    }
    var ref_role = localStorage.getItem('Ref_role');
    if (ref_role != "undefined" || ref_role != "null") {
      $('#ref_role').val(ref_role);
    } else{
      $('#ref_role').val("");
    }
  } else {
    // No support. Use a fallback such as browser cookies or store on the server.
    alert("Not Support Local Storage");
  }
}