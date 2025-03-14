<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    public function multimedia()
    {
        return $this->belongsToMany(Multimedia::class, 'multimedia_tour');
    }
}
