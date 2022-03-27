@extends('layouts.app')
@section('content')
    <title>Adin | Dashboard</title>
    </head>

    <body>
        <div id="app">
            @include('layouts.sidenav')

            <div class="app-content">

                @include('layouts.header')

                <!-- end: TOP NAVBAR -->
                <div class="main-content">
                    <div class="wrap-content container" id="container">
                        <!-- start: PAGE TITLE -->
                        <section id="page-title">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h1 class="mainTitle">Admin | Dashboard</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li>
                                        <span>Admin</span>
                                    </li>
                                    <li class="active">
                                        <span>Dashboard</span>
                                    </li>
                                </ol>
                            </div>
                        </section>
                        <!-- end: PAGE TITLE -->
                        <!-- start: BASIC EXAMPLE -->
                        <div class="container-fluid container-fullw bg-white">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="panel panel-white no-radius text-center">
                                        <div class="panel-body">
                                            <span class="fa-stack fa-2x"> <i
                                                    class="fa fa-square fa-stack-2x text-primary"></i> <i
                                                    class="fa fa-smile-o fa-stack-1x fa-inverse"></i> </span>
                                            <h2 class="StepTitle">Manage Users</h2>

                                            <p class="links cl-effect-1">
                                                <a href="{{ route('manage_users') }}">

                                                    Total Users {{ $totalUsers }}
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="panel panel-white no-radius text-center">
                                        <div class="panel-body">
                                            <span class="fa-stack fa-2x"> <i
                                                    class="fa fa-square fa-stack-2x text-primary"></i> <i
                                                    class="fa fa-users fa-stack-1x fa-inverse"></i> </span>
                                            <h2 class="StepTitle">Manage Doctors</h2>

                                            <p class="cl-effect-1">
                                                <a href="{{ route('manage_doctors') }}">

                                                    Total Doctors : {{ $totalDoctors }}
                                                </a>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="panel panel-white no-radius text-center">
                                        <div class="panel-body">
                                            <span class="fa-stack fa-2x"> <i
                                                    class="fa fa-square fa-stack-2x text-primary"></i> <i
                                                    class="fa fa-terminal fa-stack-1x fa-inverse"></i> </span>
                                            <h2 class="StepTitle"> Appointments</h2>

                                            <p class="links cl-effect-1">
                                                <a href="{{ route('admin_appointment_history') }}">

                                                    Total Appointments : {{ $totalAppointments }}
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="panel panel-white no-radius text-center">
                                        <div class="panel-body">
                                            <span class="fa-stack fa-2x"> <i
                                                    class="fa fa-square fa-stack-2x text-primary"></i> <i
                                                    class="fa fa-smile-o fa-stack-1x fa-inverse"></i> </span>
                                            <h2 class="StepTitle">Manage Patients</h2>

                                            <p class="links cl-effect-1">
                                                <a href="{{ route('manage_patients') }}">
                                                    Total Patients : {{ $totalPatients }}
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- end: SELECT BOXES -->

                    </div>
                </div>
            </div>
            <!-- start: FOOTER -->
            footer goes here
            <!-- end: FOOTER -->

            <!-- start: SETTINGS -->
            settins goes here

            <!-- end: SETTINGS -->
        </div>

        <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
        <script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
        <script src="vendor/autosize/autosize.min.js"></script>
        <script src="vendor/selectFx/classie.js"></script>
        <script src="vendor/selectFx/selectFx.js"></script>
        <script src="vendor/select2/select2.min.js"></script>
        <script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
        <script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
        <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <!-- start: CLIP-TWO JAVASCRIPTS -->
        <script src="assets/js/main.js"></script>
        <!-- start: JavaScript Event Handlers for this page -->
        <script src="assets/js/form-elements.js"></script>

        <!-- end: JavaScript Event Handlers for this page -->
        <!-- end: CLIP-TWO JAVASCRIPTS -->
    @endsection
