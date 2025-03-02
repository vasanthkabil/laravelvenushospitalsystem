<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Doctor extends Model
{
    use HasFactory;
    public function patients()
    {
        return $this->belongsToMany(Patient::class,'ward_admission_doctors','doctor_id','patient_id');
    }
    public function wardadmissions()
    {
        return $this->belongsToMany(WardAdmission::class,'ward_admission_doctors','doctor_id','ward_addmission_id');
    }

    public function wards()
    {
        return $this->belongsToMany(Ward::class,'ward_admissions','doctor_id','ward_id');
    }


}
