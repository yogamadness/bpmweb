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
                <a class="navbar-brand hidden-xs" href="index.html"><img src="assets/img/pages/logo.png" alt="Brand"> TRIPUTRA AGRO PERSADA</a>
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ Session::get('nama') }} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
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
                        <a href="javascript:;" data-toggle="collapse" data-target="#hc"><i class="fa fa-fw fa-arrows-v"></i> HC <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="hc" class="collapse">
                            <li>
                                <a href="javascript:;" data-toggle="collapse" data-target="#ptk"><span class="glyphicon glyphicon-th" aria-hidden="true"></span>  ptk</a>
                                <ul id="ptk" class="collapse">
                                    <li><a href=""> Input PTK</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href=""><span class="glyphicon glyphicon-th" aria-hidden="true"></span>  Terminasi</a>
                            </li>
                            <li>
                                <a href=""><span class="glyphicon glyphicon-th" aria-hidden="true"></span>  PPM</a>
                            </li>
                            <li>
                                <a href=""><span class="glyphicon glyphicon-th" aria-hidden="true"></span>  Sanksi</a>
                            </li>
                            <li>
                                <a href=""><span class="glyphicon glyphicon-th" aria-hidden="true"></span>  Input / Rubah Personalia</a>
                            </li>
                            <li>
                                <a href=""><span class="glyphicon glyphicon-th" aria-hidden="true"></span>  PDG</a>
                            </li>
                            <li>
                                <a href=""><span class="glyphicon glyphicon-th" aria-hidden="true"></span>  UPP</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Menus <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                @foreach (Session::get('menus') as $menus)
                                    {!! $menus !!}
                                @endforeach
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
