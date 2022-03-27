@extends('layouts.app')
@section('content')
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
                                    <h1 class="mainTitle">User | Appointment History</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li>
                                        <span>User </span>
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
                                                        <td class="center">
                                                            {{ $loop->index + 1 }}
                                                        </td>
                                                        <td class="hidden-xs">
                                                            {{ $appointment->doctor->user->fullName }} </td>
                                                        <td>{{ $appointment->doctorSpecialization }}</td>
                                                        <td>{{ $appointment->consultancyFees }}</td>
                                                        <td>{{ $appointment->appointmentDate }} /
                                                            {{ $appointment->appointmentTime }}
                                                        </td>
                                                        <td>
                                                            {{ $appointment->created_at }}
                                                        <td>
                                                            @if ($appointment->userStatus == 1 && $appointment->doctorStatus == 1)
                                                                Active
                                                            @endif

                                                            @if ($appointment->userStatus == 0 && $appointment->doctorStatus == 1)
                                                                Cancelled by you
                                                            @endif

                                                            @if ($appointment->userStatus == 1 && $appointment->doctorStatus == 0)
                                                                Cancelled by doctor
                                                            @endif


                                                        </td>
                                                        <td>
                                                            <div class="visible-md visible-lg hidden-sm hidden-xs">


                                                                @if ($appointment->userStatus == 1 && $appointment->doctorStatus == 1)
                                                                    <a href="{{ route('patient_cancel_appointment', $appointment->id) }}"
                                                                        onClick="return confirm('Are you sure you want to cancel this appointment ?')"
                                                                        class="btn btn-transparent btn-xs tooltips"
                                                                        title="Cancel Appointment" tooltip-placement="top"
                                                                        tooltip="Remove">Cancel</a>
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
                                                                    <ul class="dropdown-menu pull-right dropdown-light"
                                                                        role="menu">
                                                                        <li>
                                                                            <a href="#">
                                                                                Edit
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                Share
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                Remove
                                                                            </a>
                                                                        </li>
                                                                    </ul>
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


            <!-- end: SETTINGS -->
        </div>
        <!-- start: MAIN JAVASCRIPTS -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="vendor/modernizr/modernizr.js"></script>
        <script src="vendor/jquery-cookie/jquery.cookie.js"></script>
        <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="vendor/switchery/switchery.min.js"></script>
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
        <script>
            jQuery(document).ready(function() {
                Main.init();
                FormElements.init();
            });
        </script>
        <!-- end: JavaScript Event Handlers for this page -->
        <!-- end: CLIP-TWO JAVASCRIPTS -->
    </body>
@endsection
