@extends('layouts.app')

@section('content')
    <title>Doctor | Add Patient</title>

    </head>

    <body>
        <div id="app">
            @include('layouts.sidenav')
            <div class="app-content">
                @include('layouts.header')

                <div class="main-content">
                    <div class="wrap-content container" id="container">
                        <!-- start: PAGE TITLE -->
                        <section id="page-title">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h1 class="mainTitle">Patient | Add Patient</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li>
                                        <span>Patient</span>
                                    </li>
                                    <li class="active">
                                        <span>Add Patient</span>
                                    </li>
                                </ol>
                            </div>
                        </section>
            
                        <div class="container-fluid container-fullw bg-white">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row margin-top-30">
                                        <div class="col-lg-8 col-md-12">
                                            <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h5 class="panel-title">Add Patient</h5>
                                                </div>
                                                <div class="panel-body">
                                                    <form role="form" name="" method="post"
                                                        action="{{ route('add_patient') }}">
                                                        @csrf

                                                        <div class="form-group">
                                                            <label for="doctorname">
                                                                Patient Name
                                                            </label>
                                                            <input type="text" name="PatientName" class="form-control"
                                                                placeholder="Enter Patient Name" required="true">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="fess">
                                                                Patient Contact no
                                                            </label>
                                                            <input type="text" name="PatientContno" class="form-control"
                                                                placeholder="Enter Patient Contact no" required="true"
                                                                maxlength="10" pattern="[0-9]+">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="fess">
                                                                Patient Email
                                                            </label>
                                                            <input type="email" id="patemail" name="PatientEmail"
                                                                class="form-control" placeholder="Enter Patient Email id"
                                                                required="true">
                                                            <span id="user-availability-status1"
                                                                style="font-size:12px;"></span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="block">
                                                                Gender
                                                            </label>
                                                            <div class="clip-radio radio-primary">
                                                                <input type="radio" id="rg-female" name="PatientGender"
                                                                    value="Female">
                                                                <label for="rg-female">
                                                                    Female
                                                                </label>
                                                                <input type="radio" id="rg-male" name="PatientGender" value="Male">
                                                                <label for="rg-male">
                                                                    Male
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="address">
                                                                Patient Address
                                                            </label>
                                                            <textarea name="PatientAdd" class="form-control" placeholder="Enter Patient Address" required="true"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="fess">
                                                                Patient Age
                                                            </label>
                                                            <input type="text" name="PatientAge" class="form-control"
                                                                placeholder="Enter Patient Age" required="true">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="fess">
                                                                Medical History
                                                            </label>
                                                            <textarea type="text" name="PatientMedhis" class="form-control" placeholder="Enter Patient Medical History(if any)"
                                                                required="true"></textarea>
                                                        </div>

                                                        <button type="submit" name="submit" id="submit"
                                                            class="btn btn-o btn-primary">
                                                            Add
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="panel panel-white">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- end: SETTINGS -->
        </div>
        <!-- start: MAIN JAVASCRIPTS -->

        <!-- end: MAIN JAVASCRIPTS -->
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
    @endsection
