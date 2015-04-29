<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="_token" content="{{ csrf_token() }}" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Студио шик контролен панел</title>

    <!-- Bootstrap Core CSS -->
    <link href="/assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/assets/admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/assets/admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/assets/admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->



    <link href="/assets/admin/bootstrap-switch-master/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet">


     <script src="/assets/admin/js/jquery-1.11.2.js"></script>


</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Студио шик</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        @if(Auth::guest())
                        @else
                        <li><a href="/admin"><i class="fa fa-user fa-fw"></i> {{Auth::user()->name}}</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="/admin/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                        @endif
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="#"><i class="fa  fa-gears fa-fw"></i> Акаунти<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin/account/registration">Регистрация</a>
                                </li>
                                <li>
                                    <a href="/admin/account/select">Корекция</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-spinner fa-fw"></i> Услуги<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin/services/categoryadd">Добавяне Категория</a>
                                </li>
                                <li>
                                    <a href="/admin/services/categorydelete">Изтриване Категория</a>
                                </li>
                                <li>
                                    <a href="/admin/services/service/addservice">Добавяне Услуга</a>
                                </li>
                                <li>
                                    <a href="/admin/services/service/select">Корекция Услуга</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-child fa-fw"></i> Промоции<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin/promotions/addpromotion">Добавяне</a>
                                </li>
                                <li>
                                    <a href="/admin/promotions/panel">Панел промоции</a>
                                </li>
                                <li>
                                    <a href="/admin/promotions/promotion/select">Корекция</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-image fa-fw"></i> Галерия<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin/gallery/addcategory">Добавяне на категория</a>
                                </li>
                                <li>
                                    <a href="/admin/gallery/dellcategory">Изтриване на категория</a>
                                </li>
                                <li>
                                    <a href="/admin/gallery">Галерия</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-comments fa-fw"></i> Новини<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin/news/addnew">Добавяне</a>
                                </li>
                                <li>
                                    <a href="/admin/news/new/select">Корекция</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        @yield('content')
                        @if(Session::has('message'))
                            @foreach ( Session::get('message') as $message)
                                {{$message}}
                            @endforeach
                           
                        @endif
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="/assets/admin/js/jquery-1.11.2.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/assets/admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/assets/admin/dist/js/sb-admin-2.js"></script>

    <script src="/assets/admin/bootstrap-switch-master/dist/js/bootstrap-switch.js"></script>


</body>

</html>
