<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>TAP - @yield('tittle')</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/sb-admin.css" rel="stylesheet">
    <link href="assets/dist/css/AdminLTE.min.css" rel="stylesheet">
    <link href="assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- dataTables -->
    <link rel="stylesheet" href="dist/plugins/datatables/dataTables.bootstrap.css">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="dist/plugins/datetimepicker/css/bootstrap-datetimepicker.min.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="dist/plugins/iCheck/all.css">
    
    <style type="text/css">
        /*Navbar Header*/
        .navbar-inverse {
            background-color: #8dc63f;
            border-color: #8dc63f;
            padding: 20px;
        }

        .top-nav > li > a {
            padding-top: 15px;
            padding-bottom: 15px;
            line-height: 20px;
            color: #fff;
        }

        .top-nav > li > a:hover, .top-nav > li > a:focus, .top-nav > .open > a, .top-nav > .open > a:hover, .top-nav > .open > a:focus {
            color: #fff;
            background-color: #79B429;
        }

        .navbar-inverse .navbar-brand {
            color: #FFF;
        }

        .navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form {
            border-color: #eee;
        }

        /*Menu Samping kiri*/
        .navbar-inverse .navbar-nav > .active > a, .navbar-inverse .navbar-nav > .active > a:hover, .navbar-inverse .navbar-nav > .active > a:focus {
            color: #428bca; /*fff*/
            background-color: #eee;
        }

        .navbar-inverse .navbar-nav > li > a:hover, .navbar-inverse .navbar-nav > li > a:focus {
            color: #428bca;
            background-color: transparent;
        }

        .navbar-inverse .navbar-nav > li > a {
            color: #428bca; /*#fff*/
        }

        .side-nav > li > ul > li > a { /*Level Dua*/
            display: block;
            padding: 10px 15px 10px 38px;
            text-decoration: none;
            color: #428bca; /*#fff*/
        }

        .side-nav li a:hover, .side-nav li a:focus {
            outline: none;
            background-color: #eee !important;
        }

        .side-nav > li > ul > li > ul > li > a { /*Level Tiga*/
            display: block;
            padding: 10px 15px 10px 38px; /*10px 15px 10px 38px; atas kanan bawah kiri*/
            text-decoration: none;
            color: #428bca; /*#fff*/
        }

        .side-nav > li > ul > li > ul > li > ul > li > a { /*Level Empat*/
            display: block;
            padding: 10px 15px 10px 38px; /*10px 15px 10px 38px; atas kanan bawah kiri*/
            text-decoration: none;
            color: #428bca; /*#fff*/
        }

        .side-nav ul {
            list-style-type: none; /* Remove list bullets */
        }

        @media screen and (max-width: 767px) {
            .navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form {
                background-color: #eee;
            }
        }

        .navbar-brand {
            padding: 0px; /* firefox bug fix */
        }
        .navbar-brand>img {
            height: 100%;
            padding: 15px;  /*firefox bug fix */
            width: auto;
            background-color: #fff;
            padding: 1px;
        }

        /*.side-nav>li>ul>li>ul>li>a {
            margin-left: -70px;
            width: 225px;
        }*/

        /*Toggle menu*/
        .navbar-inverse .navbar-toggle {
            border-color: #FCFCFC;
        }

        .navbar-inverse .navbar-toggle:hover, .navbar-inverse .navbar-toggle:focus {
            background-color: #6A9B28;
        }

        .navbar-inverse {
            /*height: 15%;*/
        }

        .side-nav {
            top: 91px;
        }

        /*Body*/
        #page-wrapper {
            padding: 45px 10px 10px 10px;
        }

        .typeahead { width: 90%; }
    </style>

    @yield('cascanding')
    <!-- jQuery Version 2.2.3 -->
    <script src="dist/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>
</head>

<body>

    <div id="wrapper">

        @include('layouts-master.navbar-master')
        <div id="page-wrapper">

            <div class="container-fluid">
                @yield('content')
            </div>

        </div>

    </div>
    <!-- /#wrapper -->
    <script type="text/javascript">
        // $(document).ready(function() {
        //     looping1();
        // });

        // function ceklogin() {
        //     $.ajaxSetup({
        //       headers: {
        //           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //       }
        //     });
        //     $.ajax({
        //         type: "post",
        //         url: "reload",
        //         async: false
        //     }).success(function(data){
        //         if (data.success == true ) {
        //             setTimeout(function(){
        //                 looping1();
        //             }, 1000);   
        //         }else{
        //             alert("Please Re-Login");
        //             window.location.replace("loginn");    
        //         }
        //     }).error(function(){
        //         console.log("eror")
        //     });
        //   }

        // function looping1() {
        //     ceklogin();
        // }
        
    </script>
    
    @yield('javascript-form')
    @stack('js')
</body>

</html>
