<?php

namespace App\Http\Controllers;

use App\Models\MedicalHistory;
use App\Models\PatientByDoctor;
use Faker\Provider\Medical;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
    public function appointmentHistory()
    {

        $appointments = auth()->user()->doctor->appointments->all();

        return view('doctor.appointmentHistory', [
            'appointments' => $appointments
        ]);
    }


    public function cancelAppointment($appointmentId)
    {
        auth()->user()->doctor->appointments()->where('id', $appointmentId)->update(["doctorStatus" => 0]);
        return back();
    }

    public function addPatient(Request $request)
    {
        auth()->user()->doctor->patientsByDoctor()->create(
            [
                "PatientName" => $request->input("PatientName"),
                "PatientContno" => $request->input("PatientContno"),
                "PatientEmail" => $request->input("PatientEmail"),
                "PatientGender" => $request->input("PatientGender"),
                "PatientAdd" => $request->input("PatientAdd"),
                "PatientMedhis" => $request->input("PatientMedhis"),
                "PatientAge" => $request->input("PatientAge"),
                "Docid" => auth()->user()->doctor->id,
            ]
        );
        return back();
    }

    public function managePatients(Request $request)
    {

        $patientsByDoctor = auth()->user()->doctor->patientsByDoctor;

        return view('doctor.managePatients', [
            'patientsByDoctor' => $patientsByDoctor
        ]);
    }

    public function editPatient($patientId, Request $request)
    {

        switch ($request->method()) {
            case 'GET':
                $patient = auth()->user()->doctor->patientsByDoctor()->where('id',  $patientId)->first();
                return view('doctor.editPatient', [
                    'patient' => $patient
                ]);
                break;

            case 'POST':
                auth()->user()->doctor->patientsByDoctor()->where('id',  $patientId)->update(
                    $request->only(
                        "PatientName",
                        "PatientContno",
                        "PatientAdd",
                        "PatientAge",
                        "PatientMedhis",
                    )
                );

                return back();
                break;
            default:
                return http_response_code(400);
        }
    }


    public function viewPatient($patientId, Request $request)
    {
        switch ($request->method()) {
            case 'GET':
                $medicalHistories = MedicalHistory::where('patient_id', $patientId)->get();
                $patientDetails = PatientByDoctor::where('id', $patientId)->first();
                // return dd($medicalHistories->first()->patient->PatientName);
                return view(
                    'doctor.viewPatient',
                    [
                        'medicalHistories' => $medicalHistories,
                        'patientDetails' => $patientDetails
                    ]
                );
                break;

            default:
                return http_response_code(400);
        }
    }
    public function addMedicalHistory($patientId, Request $request)
    {
        switch ($request->method()) {
            case 'POST':
                MedicalHistory::create(
                    [
                        'BloodPressure' => $request->input("BloodPressure"),
                        'BloodSugar' => $request->input("BloodSugar"),
                        'Weight' => $request->input("Weight"),
                        'Temperature' => $request->input("Temperature"),
                        'MedicalPres' => $request->input("MedicalPres"),
                        'patient_id' => $patientId
                    ]
                );
                return back();

                break;

            default:
                return http_response_code(400);
        }
    }
}
