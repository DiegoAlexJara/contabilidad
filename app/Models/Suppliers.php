<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    
    use HasFactory;

    protected $fillable = ['name', 'currency', 'status'];

    public function invoices()
    {
        return $this->hasMany(Invoices::class);
    }

    public function creditNotes()
    {
        return $this->hasMany(CreditNotes::class);
    }

}
