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
                                    <h1 class="mainTitle">Patient | Update Patient</h1>
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
                                                    @if (isset($patient))
                                                    <form role="form" name="" action="{{ route('edit_patient', $patient->id) }}" method="post">
                                                        @csrf

                                                            <div class="form-group">
                                                                <label for="doctorname">
                                                                    Patient Name
                                                                </label>
                                                                <input type="text" name="PatientName" class="form-control"
                                                                    value="{{ $patient->PatientName }}" required="true">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="fess">
                                                                    Patient Contact no
                                                                </label>
                                                                <input type="text" name="PatientContno" class="form-control"
                                                                    value="{{ $patient->PatientContno }}" required="true"
                                                                    maxlength="10" pattern="[0-9]+">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="fess">
                                                                    Patient Email
                                                                </label>
                                                                <input type="email" id="patemail" name="PatientEmail"
                                                                    class="form-control"
                                                                    value="{{ $patient->PatientEmail }}" readonly='true'>
                                                                <span id="email-availability-status"></span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Gender: </label>

                                                                @if ($patient->PatientGender == 'Female')
                                                                    <input type="radio" name="PatientGender" id="gender"
                                                                        value="Female" checked="true">Female
                                                                    <input type="radio" name="PatientGender" id="gender"
                                                                        value="male">Male
                                                                @else
                                                                    <label>
                                                                        <input type="radio" name="PatientGender" id="gender"
                                                                            value="Male" checked="true">Male
                                                                        <input type="radio" name="PatientGender" id="gender"
                                                                            value="Female">Female
                                                                    </label>
                                                                @endif

                                                            </div>
                                                            <div class="form-group">
                                                                <label for="address">
                                                                    Patient Address
                                                                </label>
                                                                <textarea name="PatientAdd" class="form-control" required="true">{{ $patient->PatientAdd }}</textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="fess">
                                                                    Patient Age
                                                                </label>
                                                                <input type="text" name="PatientAge" class="form-control"
                                                                    value="{{ $patient->PatientAge }}" required="true">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="fess">
                                                                    Medical History
                                                                </label>
                                                                <textarea type="text" name="PatientMedhis" class="form-control" placeholder="Enter Patient Medical History(if any)"
                                                                    required="true">{{ $patient->PatientMedhis }}</textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="fess">
                                                                    Creation Date
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    value="{{ $patient->created_at }}" readonly='true'>
                                                            </div>

                                                            <button type="submit" name="submit" id="submit"
                                                                class="btn btn-o btn-primary">
                                                                Update
                                                            </button>
                                                        </form>
                                                        @endif
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

    @endsection
