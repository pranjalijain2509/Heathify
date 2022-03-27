@extends('layouts.app')

@section('content')
    <script>
		function getdoctor(val) {
			$.ajax({
				type: "POST",
				url: "{{ route('get_doctor') }}",
				data: 'specilizationid=' + val,
				success: function(data) {
					$("#doctor").html(data);
				}
			});
		}
    </script>


    <script>
        function getfee(val) {
            $.ajax({
                type: "POST",
                url: "{{ route('get_doctor') }}",
                data: 'doctor=' + val,
                success: function(data) {
                    $("#fees").html(data);
                }
            });
        }
    </script>




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
                                    <h1 class="mainTitle">User | Book Appointment</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li>
                                        <span>User</span>
                                    </li>
                                    <li class="active">
                                        <span>Book Appointment</span>
                                    </li>
                                </ol>
                        </section>
                        <!-- end: PAGE TITLE -->
                        <!-- start: BASIC EXAMPLE -->
                        <div class="container-fluid container-fullw bg-white">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="row margin-top-30">
                                        <div class="col-lg-8 col-md-12">
                                            <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h5 class="panel-title">Book Appointment</h5>
                                                </div>
                                                <div class="panel-body">

                                                    session message goes here


                                                    <form role="form" name="book" method="post" action="{{ route('newAppointment') }}">
                                                    @csrf
                                                        <div class="form-group">
                                                            <label for="doctorSpecialization">
                                                                Doctor Specialization
                                                            </label>
                                                            <select name="doctorSpecialization" class="form-control"
                                                                onChange="getdoctor(this.value);" required="required">
                                                                <option value="">Select Specialization</option>

                                                                @if ($specializations->count())
                                                                    @foreach ($specializations as $specialization)
                                                                        <option value="{{ $specialization->id }}">
                                                                            {{ $specialization->name }}
                                                                        </option>
                                                                    @endforeach
                                                                @endif


                                                            </select>
                                                        </div>




                                                        <div class="form-group">
                                                            <label for="doctor">
                                                                Doctors
                                                            </label>
                                                            <select name="doctor" class="form-control" id="doctor"
                                                                onChange="getfee(this.value);" required="required">
                                                                <option value="">Select Doctor</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="consultancyfees">
                                                                Consultancy Fees
                                                            </label>
                                                            <select name="consultancyFees" class="form-control" id="fees" readonly>

                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="AppointmentDate">
                                                                Date
                                                            </label>
                                                            <input class="form-control datepicker" name="appointmentDate"
                                                                required="required" data-date-format="yyyy-mm-dd">

                                                        </div>

                                                        <div class="form-group">
                                                            <label for="Appointmenttime">

                                                                Time

                                                            </label>
                                                            <input class="form-control" name="appointmentTime" id="timepicker1"
                                                                required="required">eg : 10:00 PM
                                                        </div>

                                                        <button type="submit" name="submit" class="btn btn-o btn-primary">
                                                            Submit
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
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
        <script src="vendor/selectFx/selectFx.js"></script>
        <script src="vendor/select2/select2.min.js"></script>
        <script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
        <script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
        <script src="assets/js/main.js"></script>
        <!-- start: JavaScript Event Handlers for this page -->
        <script src="assets/js/form-elements.js"></script>
        <script>
            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd',
                startDate: '-3d'
            });
        </script>
        <script type="text/javascript">
            $('#timepicker1').timepicker();
        </script>
            

     
    @endsection
