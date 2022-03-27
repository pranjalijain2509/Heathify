@extends('layouts.app')
@section('content')


    <title>Admin | Doctor Specialization</title>
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
                                    <h1 class="mainTitle">Admin | Add Doctor Specialization</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li>
                                        <span>Admin</span>
                                    </li>
                                    <li class="active">
                                        <span>Add Doctor Specialization</span>
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
                                                    <h5 class="panel-title">Doctor Specialization</h5>
                                                </div>
                                                <div class="panel-body">

                                                    <form role="form" name="dcotorspcl" method="post"
                                                        action="{{ route('add_new_specialization') }}">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">
                                                                Doctor Specialization
                                                            </label>
                                                            <input type="text" name="name" class="form-control"
                                                                placeholder="Enter Doctor Specialization">
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
                                <div class="col-lg-12 col-md-12">
                                    <div class="panel panel-white">


                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <h5 class="over-title margin-bottom-15">Manage <span class="text-bold">Doctor
                                            Specialization</span></h5>

                                    <table class="table table-hover" id="sample-table-1">
                                        <thead>
                                            <tr>
                                                <th class="center">#</th>
                                                <th>Specialization</th>
                                                <th class="hidden-xs">Creation Date</th>
                                                <th>Updation Date</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (count($doctorSpecializations))
                                                @foreach ($doctorSpecializations as $doctorSpecialization)
                                                    <tr>
                                                        <td class="center">{{ $loop->index + 1 }}</td>
                                                        <td class="hidden-xs">{{ $doctorSpecialization->name }}</td>
                                                        <td> {{ $doctorSpecialization->created_at }} </td>

                                                        @if ($doctorSpecialization->created_at != $doctorSpecialization->updated_at)
                                                            <td> {{ $doctorSpecialization->updated_at }}
                                                            @else
                                                            <td>
                                                        @endif

                                                        </td>

                                                        <td>
                                                            <div class="visible-md visible-lg hidden-sm hidden-xs">
                                                                <a href="{{route('update_specialization', $doctorSpecialization->id) }}"
                                                                    class="btn btn-transparent btn-xs"
                                                                    tooltip-placement="top" tooltip="Edit"><i
                                                                        class="fa fa-pencil"></i></a>

                                                                <a href="{{ route('delete_specialization', $doctorSpecialization->id) }}"
                                                                    onClick="return confirm('Are you sure you want to delete?')"
                                                                    class="btn btn-transparent btn-xs tooltips"
                                                                    tooltip-placement="top" tooltip="Remove"><i
                                                                        class="fa fa-times fa fa-white"></i></a>
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
                    </div>
                </div>
                <!-- end: BASIC EXAMPLE -->
                <!-- end: SELECT BOXES -->

            </div>
        </div>
        </div>

        </div>




    @endsection
