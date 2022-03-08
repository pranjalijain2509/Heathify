<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\DoctorSpecialization;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function newAppointment(Request $request)
    {



        auth()->user()->appointments()->create(
            array(
                "doctorSpecialization" => DoctorSpecialization::find($request->input("doctorSpecialization"))->name,
                "doctor_id" => $request->input("doctor"),
                "user_id" => $request->input(auth()->user()->id),
                "consultancyFees" => $request->input("consultancyFees"),
                "appointmentDate" => $request->input("appointmentDate"),
                "appointmentTime" => $request->input("appointmentTime"),
                "userStatus" => 1,
                "doctorStatus" => 1
            )
        );

        return redirect()->route('patient_appointment_history');;
    }
}
