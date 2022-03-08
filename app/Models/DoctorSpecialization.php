<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorSpecialization extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    static public  function doctors(int $specialization_id)
    {

        return Doctor::where('specialization_id', $specialization_id)->get();
    }
}
