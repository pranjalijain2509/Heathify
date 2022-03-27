@extends('layouts.app')
@section('content')
    <title>Doctor | Manage Patients</title>
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
                                    <h1 class="mainTitle">Doctor | Manage Patients</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li>
                                        <span>Doctor</span>
                                    </li>
                                    <li class="active">
                                        <span>Manage Patients</span>
                                    </li>
                                </ol>
                            </div>
                        </section>
                        <div class="container-fluid container-fullw bg-white">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5 class="over-title margin-bottom-15">Manage <span
                                            class="text-bold">Patients</span></h5>



                                    @if (isset($patientDetails))
                                        <table border="1" class="table table-bordered">
                                            <tr align="center">
                                                <td colspan="4" style="font-size:20px;color:blue">
                                                    Patient Details</td>
                                            </tr>

                                            <tr>
                                                <th scope>Patient Name</th>
                                                <td>{{ $patientDetails->PatientName }}</td>
                                                <th scope>Patient Email</th>
                                                <td>{{ $patientDetails->PatientEmail }}</td>
                                            </tr>
                                            <tr>
                                                <th scope>Patient Mobile Number</th>
                                                <td>{{ $patientDetails->PatientContno }}</td>
                                                <th>Patient Address</th>
                                                <td>{{ $patientDetails->PatientAdd }}</td>
                                            </tr>
                                            <tr>
                                                <th>Patient Gender</th>
                                                <td>{{ $patientDetails->PatientGender }}</td>
                                                <th>Patient Age</th>
                                                <td>{{ $patientDetails->PatientAge }}</td>
                                            </tr>
                                            <tr>

                                                <th>Patient Medical History(if any)</th>
                                                <td>{{ $patientDetails->PatientMedhis }}</td>
                                                <th>Patient Reg Date</th>
                                                <td>{{ $patientDetails->created_at }}</td>
                                            </tr>


                                        </table>
                                    @endif

                                    @if (count($medicalHistories))
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <tr align="center">
                                                <th colspan="8">Medical History</th>
                                            </tr>
                                            <tr>
                                                <th>#</th>
                                                <th>Blood Pressure</th>
                                                <th>Weight</th>
                                                <th>Blood Sugar</th>
                                                <th>Body Temprature</th>
                                                <th>Medical Prescription</th>
                                                <th>Visit Date</th>
                                            </tr>

                                            @foreach ($medicalHistories as $medicalHistory)
                                                <tr>
                                                    <td>{{ $loop->index + 1 }}
                                                    </td>
                                                    <td>{{ $medicalHistory->BloodPressure }}</td>
                                                    <td>{{ $medicalHistory->Weight }}</td>
                                                    <td>{{ $medicalHistory->BloodSugar }}</td>
                                                    <td>{{ $medicalHistory->Temperature }}</td>
                                                    <td>{{ $medicalHistory->MedicalPres }}</td>
                                                    <td>{{ $medicalHistory->created_at }}</td>
                                                </tr>
                                            @endforeach


                                        </table>
                                    @endif

                                    <p align="center">
                                        <button class="btn btn-primary waves-effect waves-light w-lg" data-toggle="modal"
                                            data-target="#myModal">Add Medical History</button>
                                    </p>


                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Add Medical History
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <table class="table table-bordered table-hover data-tables">
                                                        @if (isset($patientDetails))
                                                            <form method="post" name="submit"
                                                                action="{{ route('add_medical_history', $patientDetails->id) }}">
                                                                @csrf
                                                                <tr>
                                                                    <th>Blood Pressure :</th>
                                                                    <td>
                                                                        <input name="BloodPressure"
                                                                            placeholder="Blood Pressure"
                                                                            class="form-control wd-450" required="true">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Blood Sugar :</th>
                                                                    <td>
                                                                        <input name="BloodSugar" placeholder="Blood Sugar"
                                                                            class="form-control wd-450" required="true">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Weight :</th>
                                                                    <td>
                                                                        <input name="Weight" placeholder="Weight"
                                                                            class="form-control wd-450" required="true">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Body Temprature :</th>
                                                                    <td>
                                                                        <input name="Temperature"
                                                                            placeholder="Body Temprature"
                                                                            class="form-control wd-450" required="true">
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <th>Prescription :</th>
                                                                    <td>
                                                                        <textarea name="MedicalPres" placeholder="Medical Prescription" rows="12" cols="14" class="form-control wd-450"
                                                                            required="true"></textarea>
                                                                    </td>
                                                                </tr>


                                                    </table>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" name="submit"
                                                        class="btn btn-primary">Submit</button>

                                                    </form>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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
