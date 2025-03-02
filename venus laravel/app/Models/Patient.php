<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Doctor;
use App\Models\Ward;
use App\Models\WardAdmission;

class Patient extends Model
{
    use HasFactory;
    public function wardadmission()
    {
        return $this->hasOne(WardAdmission::class,'patient_id');
    }
    public function doctors()
    {
        return $this->belongsToMany(Doctor::class,'ward_admission_doctors','patient_id','doctor_id');
    }
    public function wardadmissions()
    {
        return $this->hasMany(WardAdmission::class);
    }
}
