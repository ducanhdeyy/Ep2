<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $fillable = ['id','name','description','image_path','singer_id'];

    public function scopeSearch($query)
    {
        $search = request()->search;
        return $query->where('name', 'like', "%$search%");
    }

    public function singer()
    {
        return $this->belongsTo(singer::class);
    }
}
