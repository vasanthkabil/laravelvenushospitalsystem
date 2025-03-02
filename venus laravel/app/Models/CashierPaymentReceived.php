<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashierPaymentReceived extends Model
{
    use HasFactory;
    protected $table='cashier_payment_received';
    public function payments()
    {
        return $this->morphTo();
    }
}
