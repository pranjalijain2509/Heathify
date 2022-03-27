@extends('layouts.app')
@section('content')
    <title>Admin | Manage Users</title>
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
                                    <h1 class="mainTitle">Admin | Manage Users</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li>
                                        <span>Admin</span>
                                    </li>
                                    <li class="active">
                                        <span>Manage Users</span>
                                    </li>
                                </ol>
                            </div>
                        </section>
                        <!-- end: PAGE TITLE -->
                        <!-- start: BASIC EXAMPLE -->
                        <div class="container-fluid container-fullw bg-white">


                            <div class="row">
                                <div class="col-md-12">
                                    <h5 class="over-title margin-bottom-15">Manage <span class="text-bold">Users</span>
                                    </h5>

                                    <table class="table table-hover" id="sample-table-1">
                                        <thead>
                                            <tr>
                                                <th class="center">#</th>
                                                <th>Full Name</th>
                                                <th class="hidden-xs">Adress</th>
                                                <th>City</th>
                                                <th>Gender </th>
                                                <th>Email </th>
                                                <th>Creation Date </th>
                                                <th>Updation Date </th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (count($users))
                                                @foreach ($users as $user)
                                                    <tr>
                                                        <td class="center">{{ $loop->index + 1 }}</td>
                                                        <td class="hidden-xs">{{ $user->fullName }}</td>
                                                        <td>{{ $user->address }}</td>
                                                        <td>{{ $user->city }}
                                                        </td>
                                                        <td>{{ $user->gender }}</td>
                                                        <td>{{ $user->email }}</td>
                                                        <td>{{ $user->created_at }}</td>
                                                        <td>{{ $user->updated_at }}
                                                        </td>
                                                        <td>
                                                            <div class="visible-md visible-lg hidden-sm hidden-xs">


                                                                <a href="{{ route('delete_user', $user->id) }}"
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
    @endsection
