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

                                    <table class="table table-hover" id="sample-table-1">
                                        <thead>
                                            <tr>
                                                <th class="center">#</th>
                                                <th>Patient Name</th>
                                                <th>Patient Contact Number</th>
                                                <th>Patient Gender </th>
                                                <th>Creation Date </th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @if (count($patientsByDoctor))
                                                @foreach ($patientsByDoctor as $patientByDoctor)
                                                    <tr>
                                                        <td class="center"> {{ $loop->index + 1 }}</td>
                                                        <td class="hidden-xs">{{ $patientByDoctor->PatientName }}
                                                        </td>
                                                        <td>{{ $patientByDoctor->PatientContno }}</td>
                                                        <td>{{ $patientByDoctor->PatientGender }}</td>
                                                        <td>{{ date('d-m-Y', strtotime($patientByDoctor->created_at)) }}
                                                        </td>
                                                        </td>
                                                        <td>

                                                            <a href="{{ route('admin_view_patient', $patientByDoctor->id) }}"><i
                                                                    class="fa fa-eye"></i></a>

                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>


        </div>

        <!-- end: MAIN JAVASCRIPTS -->
    @endsection
