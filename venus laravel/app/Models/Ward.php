<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Patient;
use App\Models\WardAdmission;

class Ward extends Model
{
    use HasFactory;
    public function patients()
    {
        return $this->hasMany(Patient::class);
    }
    public function wardadmissions()
    {
        return $this->hasMany(WardAdmission::class,'ward_id','id');
    }
    public function doctors()
    {
        return $this->belongsToMany(Doctor::class,'ward_admissions','ward_id','doctor_id');
    }
}
