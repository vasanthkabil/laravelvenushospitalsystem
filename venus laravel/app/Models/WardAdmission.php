<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Patient;
use App\Models\Ward;
use App\Models\CashierPaymentReceived;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class WardAdmission extends Model
{
    use HasFactory;
    public function doctors()
    {
        return $this->belongsToMany(Doctor::class,'ward_admission_doctors','ward_addmission_id','doctor_id');
    }
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
    public function ward()
    {
        return $this->belongsTo(Ward::class);
    }

    public function payment()
    {
        return $this->morphOne(CashierPaymentReceived::class, 'payments', 'table_name', 'table_id','id');
    }





}
