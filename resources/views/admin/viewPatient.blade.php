@extends('layouts.app')
@section('content')
    <title>Admin | Manage Patients</title>
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
                                    <h1 class="mainTitle">Admin | Manage Patients</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li>
                                        <span>Admin</span>
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

                                </div>
                            </div>
                        </div>
                    </div>

                @endsection
