<?php
namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\DoctorSpecialization;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function bookAppointment(Request $request)
    {
        $specializations = DoctorSpecialization::all();
        return view('patient.bookAppointment', [
            'specializations' => $specializations
        ]);
    }

    public function getDoctors(Request $request)
    {

        if (isset($request->input()['specilizationid'])) {
            $doctors = DoctorSpecialization::doctors($request->input()['specilizationid']);
            return view('patient.bookAppointment_doctors', [
                'doctors' => $doctors
            ]);
        } else if (isset($request->input()['doctor'])) {
            $doctors = DoctorSpecialization::doctors($request->input()['doctor']);
            return view('patient.bookAppointment_doctors_fee', [
                'doctors' => $doctors
            ]);
        } else {
            return http_response_code(400);
        }
    }

    public function appointmentHistory()
    {

        $appointments = auth()->user()->appointments->all();

        return view('patient.appointmentHistory', [
            'appointments' => $appointments
        ]);
    }

    public function cancelAppointment($appointmentId)
    {
        auth()->user()->appointments()->where('id', $appointmentId)->update(["userStatus" => 0]);
        return back();
    }
}
