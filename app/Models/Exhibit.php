<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exhibit extends Model
{
    public function multimedia()
    {
        return $this->belongsToMany(Multimedia::class, 'multimedia_exhibit');
    }
}
