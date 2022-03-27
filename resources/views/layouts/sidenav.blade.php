<div class="sidebar app-aside" id="sidebar">
    <div class="sidebar-container perfect-scrollbar">

        <nav>
            <!-- start: MAIN NAVIGATION MENU -->
            <div class="navbar-title">
                <span>Main Navigation</span>
            </div>
            <ul class="main-navigation-menu">
                <li>
                    <a href="{{ route('dashboard') }}">
                        <div class="item-content">
                            <div class="item-media">
                                <i class="ti-home"></i>
                            </div>
                            <div class="item-inner">
                                <span class="title"> Dashboard </span>
                            </div>
                        </div>
                    </a>
                </li>

                @if (auth()->user()->role == 'patient')
                    <li>
                        <a href="{{ route('book_appointment') }}">
                            <div class="item-content">
                                <div class="item-media">
                                    <i class="ti-pencil-alt"></i>
                                </div>
                                <div class="item-inner">
                                    <span class="title"> Book Appointment </span>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('patient_appointment_history') }}">
                            <div class="item-content">
                                <div class="item-media">
                                    <i class="ti-list"></i>
                                </div>
                                <div class="item-inner">
                                    <span class="title"> Appointment History </span>
                                </div>
                            </div>
                        </a>
                    </li>
                @endif

                @if (auth()->user()->role == 'doctor')
                    <li>
                        <a href="{{ route('doctor_appointment_history') }}">
                            <div class="item-content">
                                <div class="item-media">
                                    <i class="ti-list"></i>
                                </div>
                                <div class="item-inner">
                                    <span class="title"> Appointment History </span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="item-content">
                                <div class="item-media">
                                    <i class="ti-user"></i>
                                </div>
                                <div class="item-inner">
                                    <span class="title"> Patients </span>
                                </div>
                            </div>
                        </a>
                        <ul class="sub-menu" style="display: block">

                            <li>
                                <a href="{{ route('add_patient') }}">
                                    <span class="title"> Add Patient</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('manage_patients') }}">
                                    <span class="title"> Manage Patient </span>
                                </a>
                            </li>

                        </ul>
                    </li>
                @endif
                @if (auth()->user()->role == 'admin')
                    <li>
                        <a href="">
                            <div class="item-content">
                                <div class="item-media">
                                    <i class="ti-user"></i>
                                </div>
                                <div class="item-inner">
                                    <span class="title"> Doctors </span><i class="icon-arrow"></i>
                                </div>
                            </div>
                        </a>
                        <ul class="sub-menu" style="display: block">
                            <li>
                                <a href="{{ route('doctor_specializations') }}">
                                    <span class="title"> Doctor Specialization </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('add_doctor') }}">
                                    <span class="title"> Add Doctor</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('manage_doctors') }}">
                                    <span class="title"> Manage Doctors </span>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0)">
                            <div class="item-content">
                                <div class="item-media">
                                    <i class="ti-user"></i>
                                </div>
                                <div class="item-inner">
                                    <span class="title"> Users </span><i class="icon-arrow"></i>
                                </div>
                            </div>
                        </a>
                        <ul class="sub-menu">

                            <li>
                                <a href="{{ route('manage_users') }}">
                                    <span class="title"> Manage Users </span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <div class="item-content">
                                <div class="item-media">
                                    <i class="ti-user"></i>
                                </div>
                                <div class="item-inner">
                                    <span class="title"> Patients </span><i class="icon-arrow"></i>
                                </div>
                            </div>
                        </a>
                        <ul class="sub-menu">

                            <li>
                                <a href="{{ route('admin_manage_patients') }}">
                                    <span class="title"> Manage Patients </span>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="{{ route('admin_appointment_history') }}">
                            <div class="item-content">
                                <div class="item-media">
                                    <i class="ti-file"></i>
                                </div>
                                <div class="item-inner">
                                    <span class="title"> Appointment History </span>
                                </div>
                            </div>
                        </a>
                    </li>
                @endif




            </ul>
            <!-- end: CORE FEATURES -->

        </nav>
    </div>
</div>
