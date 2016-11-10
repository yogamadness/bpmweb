<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TAP - Dashboard Example</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/sb-admin.css" rel="stylesheet">

    <link href="assets/dist/css/AdminLTE.min.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="assets/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand hidden-xs" href="index.html"><img src="img/pages/logo.png" alt="Brand"> TRIPUTRA AGRO PERSADA</a>
                <a class="navbar-brand visible-xs" href="index.html">TAP</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">You have a email <span class="label label-default">5</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Info <span class="label label-primary">3</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Info <span class="label label-success">1</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Doni Romdoni <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.html"><i class="fa fa-fw fa-edit"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> TAP <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><span class="glyphicon glyphicon-th" aria-hidden="true"></span>  Input PTK</a>
                                <ul id="demo2" class="collapse">
                                    <li>
                                        <a href="javascript:;" data-toggle="collapse" data-target="#demo3">HC</a>
                                        <ul id="demo3" class="collapse">
                                            <li>
                                                <a href="">FPTK</a>
                                            </li>
                                            <li>
                                                <a href="">Terminasi</a>
                                            </li>
                                            <li>
                                                <a href="">Mutasi</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href=""><span class="glyphicon glyphicon-th" aria-hidden="true"></span>  Approval PTK</a>
                            </li>
                            <li>
                                <a href="javascript:;" data-toggle="collapse" data-target="#demo4"><span class="glyphicon glyphicon-th" aria-hidden="true"></span>  Non Staff</a>
                                <ul id="demo4" class="collapse">
                                    <li>
                                        <a href="">Level Tiga</a>
                                    </li>
                                    <li>
                                        <a href="">Level Tiga</a>
                                    </li>
                                    <li>
                                        <a href="">Level Tiga</a>
                                    </li>
                                    <li>
                                        <a href="">Level Tiga</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                @yield('content')

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="assets/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="assets/js/plugins/morris/raphael.min.js"></script>
    <script src="assets/js/plugins/morris/morris.min.js"></script>
    <script src="assets/js/plugins/morris/morris-data.js"></script>
    <script type="text/javascript">
      function do_this(){
        var checkboxes = document.getElementsByName('approve[]');
        var button = document.getElementById('toggle');

        if(button.value == 'select'){
            for (var i in checkboxes){
                checkboxes[i].checked = 'FALSE';
            }
            button.value = 'deselect'
        }else{
            for (var i in checkboxes){
                checkboxes[i].checked = '';
            }
            button.value = 'select';
        }
      }

      function toggle(){
        $('#forms').toggle(500);
      }
    </script>

</body>

</html>
