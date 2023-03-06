<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class album extends Model
{
    use HasFactory;
    protected $fillable = ['id','name','description','image_path','singer_id'];

    public function Singer()
    {
        return $this->belongsTo(singer::class);
    }
}
