@extends('layouts.app')
@section('content')
    <title>Patients | Appointment History</title>
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
                                    <h1 class="mainTitle">Patients | Appointment History</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li>
                                        <span>Patients </span>
                                    </li>
                                    <li class="active">
                                        <span>Appointment History</span>
                                    </li>
                                </ol>
                            </div>
                        </section>
                        <!-- end: PAGE TITLE -->
                        <!-- start: BASIC EXAMPLE -->
                        <div class="container-fluid container-fullw bg-white">


                            <div class="row">
                                <div class="col-md-12">

      
                                    <table class="table table-hover" id="sample-table-1">
                                        <thead>
                                            <tr>
                                                <th class="center">#</th>
                                                <th class="hidden-xs">Doctor Name</th>
                                                <th>Patient Name</th>
                                                <th>Specialization</th>
                                                <th>Consultancy Fee</th>
                                                <th>Appointment Date / Time </th>
                                                <th>Appointment Creation Date </th>
                                                <th>Current Status</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (count($appointments))
                                                @foreach ($appointments as $appointment)
                                                    <tr>
                                                        <td class="center">{{ $loop->index + 1 }}</td>
                                                        <td class="hidden-xs">
                                                            {{ $appointment->doctor->user->fullName }} </td>
                                                        <td>
                                                            {{ $appointment->user->fullName }} </td>
                                                        <td>{{ $appointment->doctorSpecialization }}</td>
                                                        <td>{{ $appointment->consultancyFees }}</td>
                                                        <td>{{ $appointment->appointmentDate }} /
                                                            {{ $appointment->appointmentTime }}
                                                        </td>
                                                        <td>
                                                            {{ $appointment->created_at }}
                                                        </td>
                                                        <td>
                                                            @if ($appointment->userStatus == 1 && $appointment->doctorStatus == 1)
                                                                Active
                                                            @endif

                                                            @if ($appointment->userStatus == 0 && $appointment->doctorStatus == 1)
                                                                Cancelled by patient
                                                            @endif

                                                            @if ($appointment->userStatus == 1 && $appointment->doctorStatus == 0)
                                                                Cancelled by doctor
                                                            @endif


                                                        </td>
                                                        <td>
                                                            <div class="visible-md visible-lg hidden-sm hidden-xs">

                                                                @if ($appointment->userStatus == 1 && $appointment->doctorStatus == 1)
                                                                    No Action yet
                                                                @else
                                                                    Cancelled
                                                                @endif


                                                            </div>
                                                            <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                                <div class="btn-group" dropdown
                                                                    is-open="status.isopen">
                                                                    <button type="button"
                                                                        class="btn btn-primary btn-o btn-sm dropdown-toggle"
                                                                        dropdown-toggle>
                                                                        <i class="fa fa-cog"></i>&nbsp;<span
                                                                            class="caret"></span>
                                                                    </button>

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- end: BASIC EXAMPLE -->
                        <!-- end: SELECT BOXES -->

                    </div>
                </div>
            </div>
        @endsection
