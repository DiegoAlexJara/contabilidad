<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AplicationsDerailsCreditNote extends Model
{
    public function creditNoteApplication()
    {
        return $this->belongsTo(AplicationsCreditNote::class);
    }
}
