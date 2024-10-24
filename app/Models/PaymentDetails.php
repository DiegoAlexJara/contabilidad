<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentDetails extends Model
{
    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }
}
