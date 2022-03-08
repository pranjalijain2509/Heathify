<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalHistory extends Model
{
    use HasFactory;
    protected $fillable = [
        "patient_id",
        "BloodPressure",
        "BloodSugar",
        "Weight",
        "Temperature",
        "MedicalPres",
    ];

    public function patient()
    {
        return $this->belongsTo(PatientByDoctor::class);
    }
}
