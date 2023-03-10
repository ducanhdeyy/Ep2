<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    use HasFactory;

    public function song()
    {
        return $this->belongsTo(song::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
