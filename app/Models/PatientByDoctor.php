<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientByDoctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'PatientName',
        'PatientContno',
        'PatientEmail',
        'PatientGender',
        'PatientAdd',
        'PatientMedhis',
        'PatientAge',
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
