<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CreditNotes extends Model
{
    public function provider()
    {
        return $this->belongsTo(Suppliers::class);
    }

    public function applications()
    {
        return $this->hasMany(AplicationsCreditNote::class);
    }
}
