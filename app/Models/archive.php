<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class archive extends Model
{
    public function archiveable()
    {
        return $this->morphTo();
    }
}
