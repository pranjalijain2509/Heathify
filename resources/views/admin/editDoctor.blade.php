@extends('layouts.app')
@section('content')
    <title>Admin | Edit Doctor Details</title>

    </head>

    <body>
        <div id="app">
            @include('layouts.sidenav')

            <div class="app-content">

                @include('layouts.header')

                <!-- start: MENU TOGGLER FOR MOBILE DEVICES -->

                <!-- end: TOP NAVBAR -->
                <div class="main-content">
                    <div class="wrap-content container" id="container">
                        <!-- start: PAGE TITLE -->
                        <section id="page-title">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h1 class="mainTitle">Admin | Edit Doctor Details</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li>
                                        <span>Admin</span>
                                    </li>
                                    <li class="active">
                                        <span>Edit Doctor Details</span>
                                    </li>
                                </ol>
                            </div>
                        </section>
                        <!-- end: PAGE TITLE -->
                        <!-- start: BASIC EXAMPLE -->
                        <div class="container-fluid container-fullw bg-white">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5 style="color: green; font-size:18px; ">

                                        <div class="row margin-top-30">
                                            <div class="col-lg-8 col-md-12">
                                                <div class="panel panel-white">
                                                    <div class="panel-heading">
                                                        <h5 class="panel-title">Edit Doctor info</h5>
                                                    </div>
                                                    <div class="panel-body">


                                                        @if (isset($doctor))
                                                            <h4>{{ $doctor->user->fullName }}'s Profile</h4>
                                                            <p><b>Profile Reg. Date: </b>{{ $doctor->user->created_at }}
                                                            </p>

                                                            @if ($doctor->user->created_at != $doctor->user->updated_at)
                                                                <p><b>Profile Last Updation Date:
                                                                    </b>{{ $doctor->user->updated_at }}</p>
                                                            @endif


                                                            <hr />
                                                            <form role="form" name="adddoc" method="post"
                                                                action="{{ route('edit_doctor', $doctor->id) }}">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <label for="DoctorSpecialization">
                                                                        Doctor Specialization
                                                                    </label>
                                                                    <select name="Doctorspecialization"
                                                                        class="form-control" required="required">
                                                                      
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
                                                                    <input type="text" name="fullName"
                                                                        class="form-control"
                                                                        value="{{ $doctor->user->fullName }}">
                                                                </div>


                                                                <div class="form-group">
                                                                    <label for="address">
                                                                        Doctor Clinic Address
                                                                    </label>
                                                                    <textarea name="address" class="form-control"
                                                                        value="{{ $doctor->user->address }}">{{ $doctor->user->address }}</textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="fess">
                                                                        Doctor Consultancy Fees
                                                                    </label>
                                                                    <input type="text" name="docfees" class="form-control"
                                                                        required="required" value="{{ $doctor->fee }}">
                                                                </div>



                                                                <div class="form-group">
                                                                    <label for="fess">
                                                                        Doctor Email
                                                                    </label>
                                                                    <input type="email" name="email" class="form-control"
                                                                        readonly="readonly"
                                                                        value="{{ $doctor->user->email }}" />
                                                                </div>


                                                                <button type="submit" name="submit"
                                                                    class="btn btn-o btn-primary">
                                                                    Update
                                                                </button>
                                                            </form>
                                                    </div>
                                                    @endif
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
    @endsection
