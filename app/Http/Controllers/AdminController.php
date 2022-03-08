<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\DoctorSpecialization;
use App\Models\MedicalHistory;
use App\Models\PatientByDoctor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function doctorSpecializations(Request $request)
    {
        $doctorSpecializations = DoctorSpecialization::all();

        return view('admin.doctorSpecialization', [
            'doctorSpecializations' => $doctorSpecializations
        ]);
    }

    public function addNewSpecialization(Request $request)
    {

        if ($request->input('name') !== null) {
            DoctorSpecialization::create(['name' => $request->input('name')]);
            return back();
        }

        return http_response_code(400);
    }

    public function deleteSpecialization($specializationId)
    {
        DoctorSpecialization::where('id', $specializationId)->delete();
        return back();
    }
    public function updateSpecialization($specializationId, Request $request)
    {

        switch ($request->method()) {
            case 'GET':
                $specialization = DoctorSpecialization::where('id', $specializationId)->first();
                return view('admin.updateSpecialization', [
                    "specialization" => $specialization
                ]);
                break;

            case 'POST':
                $specialization = DoctorSpecialization::where('id', $specializationId)->update(
                    $request->only('name')
                );
                return redirect()->route('doctor_specializations');
                break;
            default:
                return http_response_code(400);
        }

        return back();
    }

    public function addDoctor(Request $request)
    {
        switch ($request->method()) {
            case 'GET':

                $specializations = DoctorSpecialization::all();

                return view('admin.addDoctor', [
                    'specializations' => $specializations,
                ]);

                break;

            case 'POST':
                $this->validate(
                    $request,
                    [
                        'email' => 'required|email|max:255|unique:users',
                        'password' => 'required|confirmed',
                        'fullName' => 'required|max:50',
                        'address' => 'required|max:100',
                    ]
                );


                $created_user =  User::create([
                    'fullName' => $request->fullName,
                    'username' => $request->email,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'role' => 'doctor',
                    'address' => $request->address,
                    'gender' => '',
                    'city' => '',
                ]);



                Doctor::create([
                    "user_id" => $created_user->id,
                    "specialization_id" =>  $request->Doctorspecialization,
                    "fee" => $request->docfees,
                ]);


                return redirect()->route('manage_doctors');
                break;
            default:
                return http_response_code(400);
        }
    }

    public function manageDoctors(Request $request)
    {
        $doctors = Doctor::all();

        return view('admin.manageDoctors', [
            'doctors' => $doctors
        ]);
    }
    public function deleteDoctor($doctorId, Request $request)
    {
        Doctor::where('id', $doctorId)->delete();
        return back();
    }


    public function editDoctor($doctorId, Request $request)
    {

        switch ($request->method()) {
            case 'GET':
                $doctor = Doctor::where('id', $doctorId)->first();
                $specializations = DoctorSpecialization::all();
                return view('admin.editDoctor', [
                    'doctor' => $doctor,
                    'specializations' => $specializations
                ]);

                break;

            case 'POST':

                // auth()->
                $doctor = Doctor::where('id', $doctorId)->first();
                $updatedDoctor = $doctor->update([
                    'specialization_id' => $request->Doctorspecialization,
                    'fee' => $request->docfees
                ]);

                $doctor->user->update(
                    $request->only(['fullName', 'address'])
                );

                return redirect()->route('manage_doctors');
                break;
            default:
                return http_response_code(400);
        }
    }

    public function manageUsers(Request $request)
    {
        $users = User::where('role', 'patient')->get();
        return view('admin.manageUsers', [
            'users' => $users
        ]);
    }

    public function deleteUser($userId)
    {
        User::where('id', $userId)->delete();
        return back();
    }

    public function managePatients(Request $request)
    {
        $patientsByDoctor = PatientByDoctor::all();

        return view('admin.managePatients', [
            'patientsByDoctor' => $patientsByDoctor
        ]);
    }

    public function viewPatient($patientId)
    {
        $medicalHistories = MedicalHistory::where('patient_id', $patientId)->get();
        $patientDetails = PatientByDoctor::where('id', $patientId)->first();

        return view(
            'admin.viewPatient',
            [
                'medicalHistories' => $medicalHistories,
                'patientDetails' => $patientDetails
            ]
        );
    }

    public function appointmentHistory()
    {
        $appointments = Appointment::all();
        return view(
            'admin.appointmentHistory',
            [
                'appointments' => $appointments
            ]
        );
    }
}
