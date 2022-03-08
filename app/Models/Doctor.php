<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'specialization_id',
        'name',
        'fee'
    ];

    public function specialization()
    {
        return $this->belongsTo(DoctorSpecialization::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function patientsByDoctor()
    {
        return $this->hasMany(PatientByDoctor::class);
    }
}
