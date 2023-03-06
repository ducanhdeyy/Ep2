<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $fillable = ['id','name','description'];

    // JOIN 1-N
    public function song()
    {
        return $this->hasMany(song::class,'category_id','id');
    }
}
