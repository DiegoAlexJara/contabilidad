<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AplicationsCreditNote extends Model
{
    public function invoice()
    {
        return $this->belongsTo(Invoices::class);
    }

    public function details()
    {
        return $this->hasMany(AplicationsDerailsCreditNote::class);
    }
}
