<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Singer extends Model
{
    use HasFactory;
    protected $fillable = ['id','name','dob','introduction','image_path'];

    public function scopeSearch($query)
    {
        $search = request()->search;
        return $query->where('name', 'like', "%$search%");
    }
}
