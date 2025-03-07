<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Multimedia extends Model
{
    protected $fillable = ['image', 'video', 'audio', 'qrcode'];

    public function exhibit()
    {
        return $this->belongsTo(Exhibit::class);
    }
}
