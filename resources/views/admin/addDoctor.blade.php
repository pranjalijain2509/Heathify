@extends('layouts.app')
@section('content')

    <title>Admin | Add Doctor</title>

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
                                    <h1 class="mainTitle">Admin | Add Doctor</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li>
                                        <span>Admin</span>
                                    </li>
                                    <li class="active">
                                        <span>Add Doctor</span>
                                    </li>
                                </ol>
                            </div>
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
                                                    <h5 class="panel-title">Add Doctor</h5>
                                                </div>
                                                <div class="panel-body">

                                                    <form role="form" name="adddoc" method="post"
                                                        action="{{ route('add_doctor') }}">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="DoctorSpecialization">
                                                                Doctor Specialization
                                                            </label>
                                                            <select name="Doctorspecialization" class="form-control"
                                                                required="true">
                                                                <option value="">Select Specialization</option>

                                                                @if (count($specializations))
                                                                    @foreach ($specializations as $specialization)
                                                                        <option value="{{ $specialization->id }}">
                                                                            {{ $specialization->name }}
                                                                        </option>
                                                                    @endforeach
                                                                @endif



                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="doctorname">
                                                                Doctor Name
                                                            </label>
                                                            <input type="text" name="fullName" class="form-control"
                                                                placeholder="Enter Doctor Name" required="true">
                                                            @error('fullName')
                                                                <div class="text-danger">
                                                                    {{ $message }}
                                                                    <script>
                                                                    </script>
                                                                </div>
                                                            @enderror
                                                        </div>


                                                        <div class="form-group">
                                                            <label for="address">
                                                                Doctor Clinic Address
                                                            </label>
                                                            <textarea name="address" class="form-control" placeholder="Enter Doctor Clinic Address" required="true"></textarea>
                                                            @error('address')
                                                                <div class="text-danger">
                                                                    {{ $message }}
                                                                    <script>
                                                                    </script>
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="fess">
                                                                Doctor Consultancy Fees
                                                            </label>
                                                            <input type="text" name="docfees" class="form-control"
                                                                placeholder="Enter Doctor Consultancy Fees" required="true">


                                                        </div>


                                                        <div class="form-group">
                                                            <label for="fess">
                                                                Doctor Email
                                                            </label>
                                                            <input type="email" id="docemail" name="email"
                                                                class="form-control" placeholder="Enter Doctor Email id"
                                                                required="true" onBlur="checkemailAvailability()">

                                                            @error('email')
                                                                <div class="text-danger">
                                                                    {{ $message }}
                                                                    <script>
                                                                    </script>
                                                                </div>
                                                            @enderror



                                                        </div>





                                                        <div class="form-group">
                                                            <span class="input-icon">
                                                                <input type="password" class="form-control" id="password"
                                                                    name="password" placeholder="Password">
                                                                <i class="fa fa-lock"></i> </span>
                                                            @error('password')
                                                                <div class="text-danger">
                                                                    {{ $message }}
                                                                    <script>
                                                                    </script>
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <span class="input-icon">
                                                                <input type="password" class="form-control"
                                                                    id="password_again" name="password_confirmation"
                                                                    placeholder="Password Again">
                                                                <i class="fa fa-lock"></i> </span>
                                                            @error('password_confirmation')
                                                                <div class="text-danger">
                                                                    {{ $message }}
                                                                    <script>
                                                                    </script>
                                                                </div>
                                                            @enderror
                                                        </div>



                                                        <button type="submit" name="submit" id="submit"
                                                            class="btn btn-o btn-primary">
                                                            Submit
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
                <!-- end: BASIC EXAMPLE -->






                <!-- end: SELECT BOXES -->

            </div>
        </div>
        </div>


        <!-- end: SETTINGS -->
        </div>

        <!-- end: JavaScript Event Handlers for this page -->
        <!-- end: CLIP-TWO JAVASCRIPTS -->
    </body>

    </html>
@endsection
