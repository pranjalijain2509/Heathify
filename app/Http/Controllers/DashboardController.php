<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\DoctorSpecialization;
use App\Models\PatientByDoctor;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function renderDashboard(Request $request)
    {


        if (auth()->user()) {

            $role = auth()->user()->role;

            if ($role == 'admin') {

                $totalUsers = User::all()->count();
                $totalDoctors = Doctor::all()->count();
                $totalAppointments = Appointment::all()->count();
                $totalPatients = PatientByDoctor::all()->count();

                return view(
                    'admin.dashboard',

                    [
                        'totalUsers' => $totalUsers,
                        'totalDoctors' => $totalDoctors,
                        'totalAppointments' => $totalAppointments,
                        'totalPatients' => $totalPatients,
                    ]
                );
            } else if ($role == 'doctor') {
                return view('doctor.dashboard');
            } else {
                return view('patient.dashboard');
            }
        } else {
            return redirect('login');
        }
    }
}
