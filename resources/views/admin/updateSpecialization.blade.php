@extends('layouts.app')
@section('content')
    <title>Admin | Edit Doctor Specialization</title>
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
                                    <h1 class="mainTitle">Admin | Edit Doctor Specialization</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li>
                                        <span>Admin</span>
                                    </li>
                                    <li class="active">
                                        <span>Edit Doctor Specialization</span>
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
                                        <div class="col-lg-6 col-md-12">
                                            <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h5 class="panel-title">Edit Doctor Specialization</h5>
                                                </div>
                                                <div class="panel-body">

                                                    @if (isset($specialization))
                                                        <form role="form" name="dcotorspcl" method="post"
                                                            action="{{ route('update_specialization', $specialization->id) }}">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">
                                                                    Edit Doctor Specialization
                                                                </label>

                                                                <input type="text" name="name"
                                                                    class="form-control"
                                                                    value="{{ $specialization->name }}">

                                                            </div>




                                                            <button type="submit" name="submit"
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
        </div>
    @endsection
