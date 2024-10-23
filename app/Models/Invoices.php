<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoices extends Model
{
    public function provider()
    {
        return $this->belongsTo(Suppliers::class);
    }

    public function creditNoteApplications()
    {
        return $this->hasMany(AplicationsCreditNote::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
