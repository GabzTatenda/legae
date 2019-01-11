<<<<<<< HEAD
﻿<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">

    </head>
    <body>
      @yield('content')

        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.html">Admin </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav nav-icons">
                            <li class="active"><a href="#"><i class="icon-envelope"></i></a></li>
                            <li><a href="#"><i class="icon-eye-open"></i></a></li>
                            <li><a href="#"><i class="icon-bar-chart"></i></a></li>
                        </ul>
                        <form class="navbar-search pull-left input-append" action="#">
                        <input type="text" class="span3">
                        <button class="btn" type="button">
                            <i class="icon-search"></i>
                        </button>
                        </form>
                        <ul class="nav pull-right">
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Account Options
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Item No. 1</a></li>
                                    <li><a href="#">Don't Click</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Example Header</li>
                                    <li><a href="#">A Separated link</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Logged In As Zindoga </a></li>
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/user.jpg" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Your Profile</a></li>
                                    <li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="../Slogin/login.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">


                  @section('sidebar')
                  <div class="span3">
    <div class="sidebar">
        <ul class="widget widget-menu unstyled">
            <li class="active"><a href="#"><i class="menu-icon icon-dashboard"></i>Dashboard
            </a></li>
            <li><a href="#"><i class="menu-icon icon-bullhorn"></i>System Admins </a>
            </li>
            <li><a href="#"><i class="menu-icon icon-inbox"></i>Online Applications <b class="label green pull-right">
                11</b> </a></li>
            <li><a href="#"><i class="menu-icon icon-tasks"></i>Pending Invoices <b class="label orange pull-right">
                19</b> </a></li>
        </ul>
        <!--/.widget-nav-->


        <ul class="widget widget-menu unstyled">
            <li><a href="#"><i class="menu-icon icon-book"></i>All Classes </a></li>
        </ul>

        <!--/STUDENTS-->
<ul class="widget widget-menu unstyled">
            <li><a class="collapsed" data-toggle="collapse" href="admndshbrd.php#students"><i class="menu-icon icon-cog">
            </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
            </i>All Students</a>
                <ul id="students" class="collapse unstyled">
                    <li><a href="stdnttbl1.php"><i class="icon-inbox"></i>view </a></li>
                    <li><a href="stdntcredentials.php"><i class="icon-inbox"></i>add </a></li>
                    <li><a href="crudstudent.php"><i class="icon-inbox"></i>edit </a></li>
                </ul>
            </li>
</ul>
<ul class="widget widget-menu unstyled">
            <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
            </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
            </i>Departments </a>
                <ul id="togglePages" class="collapse unstyled">
                    <li><a href="#"><i class="icon-inbox"></i>Admins </a>
<ul id="togglePages" class="collapse unstyled">
                    <li><a href="#"><i class="icon-inbox"></i>view </a></li>
                    <li><a href="#"><i class="icon-inbox"></i>add </a></li>
                    <li><a href="#"><i class="icon-inbox"></i>edit </a></li>
                </ul></li>
                    <li><a href="#"><i class="icon-inbox"></i>Teachers </a>
<ul id="togglePages" class="collapse unstyled">
                    <li><a href="#"><i class="icon-inbox"></i>view </a></li>
                    <li><a href="#"><i class="icon-inbox"></i>add </a></li>
                    <li><a href="#"><i class="icon-inbox"></i>edit </a></li>
                </ul></li>
                    <li><a href="uploadmaterial.php"><i class="icon-inbox"></i>Subjects </a>
<ul id="togglePages" class="collapse unstyled">
                    <li><a href="#"><i class="icon-inbox"></i>view </a></li>
                    <li><a href="#"><i class="icon-inbox"></i>add </a></li>
                    <li><a href="#"><i class="icon-inbox"></i>edit </a></li>
                </ul>
</li>
                </ul>
            </li>
</ul>
        <ul class="widget widget-menu unstyled">
            <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
            </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
            </i>More Pages </a>
                <ul id="togglePages" class="collapse unstyled">
                    <li><a href="#"><i class="icon-inbox"></i>Login </a></li>
                    <li><a href="#"><i class="icon-inbox"></i>Profile </a></li>
                    <li><a href="#"><i class="icon-inbox"></i>All Users </a></li>
                </ul>
            </li>
            <li><a href="../login/login.php"><i class="menu-icon icon-signout"></i>Logout </a></li>
        </ul>
    </div>
    <!--/.sidebar-->
</div>
  <!--/.span3-->
@endsection

                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        @section('footer')
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2018 kingstone softwares - kingsoftIT.co.bw </b>All rights reserved.
            </div>
            @endsection
        </div>
        </div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>

    </body>
=======
﻿<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">

    </head>
    <body>
      @yield('content')

        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.html">Admin </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav nav-icons">
                            <li class="active"><a href="#"><i class="icon-envelope"></i></a></li>
                            <li><a href="#"><i class="icon-eye-open"></i></a></li>
                            <li><a href="#"><i class="icon-bar-chart"></i></a></li>
                        </ul>
                        <form class="navbar-search pull-left input-append" action="#">
                        <input type="text" class="span3">
                        <button class="btn" type="button">
                            <i class="icon-search"></i>
                        </button>
                        </form>
                        <ul class="nav pull-right">
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Account Options
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Item No. 1</a></li>
                                    <li><a href="#">Don't Click</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Example Header</li>
                                    <li><a href="#">A Separated link</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Logged In As Zindoga </a></li>
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/user.jpg" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Your Profile</a></li>
                                    <li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="../Slogin/login.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">


                  @section('sidebar')
                  <div class="span3">
    <div class="sidebar">
        <ul class="widget widget-menu unstyled">
            <li class="active"><a href="#"><i class="menu-icon icon-dashboard"></i>Dashboard
            </a></li>
            <li><a href="#"><i class="menu-icon icon-bullhorn"></i>System Admins </a>
            </li>
            <li><a href="#"><i class="menu-icon icon-inbox"></i>Online Applications <b class="label green pull-right">
                11</b> </a></li>
            <li><a href="#"><i class="menu-icon icon-tasks"></i>Pending Invoices <b class="label orange pull-right">
                19</b> </a></li>
        </ul>
        <!--/.widget-nav-->


        <ul class="widget widget-menu unstyled">
            <li><a href="#"><i class="menu-icon icon-book"></i>All Classes </a></li>
        </ul>

        <!--/STUDENTS-->
<ul class="widget widget-menu unstyled">
            <li><a class="collapsed" data-toggle="collapse" href="admndshbrd.php#students"><i class="menu-icon icon-cog">
            </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
            </i>All Students</a>
                <ul id="students" class="collapse unstyled">
                    <li><a href="stdnttbl1.php"><i class="icon-inbox"></i>view </a></li>
                    <li><a href="stdntcredentials.php"><i class="icon-inbox"></i>add </a></li>
                    <li><a href="crudstudent.php"><i class="icon-inbox"></i>edit </a></li>
                </ul>
            </li>
</ul>
<ul class="widget widget-menu unstyled">
            <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
            </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
            </i>Departments </a>
                <ul id="togglePages" class="collapse unstyled">
                    <li><a href="#"><i class="icon-inbox"></i>Admins </a>
<ul id="togglePages" class="collapse unstyled">
                    <li><a href="#"><i class="icon-inbox"></i>view </a></li>
                    <li><a href="#"><i class="icon-inbox"></i>add </a></li>
                    <li><a href="#"><i class="icon-inbox"></i>edit </a></li>
                </ul></li>
                    <li><a href="#"><i class="icon-inbox"></i>Teachers </a>
<ul id="togglePages" class="collapse unstyled">
                    <li><a href="#"><i class="icon-inbox"></i>view </a></li>
                    <li><a href="#"><i class="icon-inbox"></i>add </a></li>
                    <li><a href="#"><i class="icon-inbox"></i>edit </a></li>
                </ul></li>
                    <li><a href="uploadmaterial.php"><i class="icon-inbox"></i>Subjects </a>
<ul id="togglePages" class="collapse unstyled">
                    <li><a href="#"><i class="icon-inbox"></i>view </a></li>
                    <li><a href="#"><i class="icon-inbox"></i>add </a></li>
                    <li><a href="#"><i class="icon-inbox"></i>edit </a></li>
                </ul>
</li>
                </ul>
            </li>
</ul>
        <ul class="widget widget-menu unstyled">
            <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
            </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
            </i>More Pages </a>
                <ul id="togglePages" class="collapse unstyled">
                    <li><a href="#"><i class="icon-inbox"></i>Login </a></li>
                    <li><a href="#"><i class="icon-inbox"></i>Profile </a></li>
                    <li><a href="#"><i class="icon-inbox"></i>All Users </a></li>
                </ul>
            </li>
            <li><a href="../login/login.php"><i class="menu-icon icon-signout"></i>Logout </a></li>
        </ul>
    </div>
    <!--/.sidebar-->
</div>
  <!--/.span3-->
@endsection

                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        @section('footer')
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2018 kingstone softwares - kingsoftIT.co.bw </b>All rights reserved.
            </div>
            @endsection
        </div>
        </div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>

    </body>
>>>>>>> First commit
