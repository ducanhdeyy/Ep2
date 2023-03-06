<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class song extends Model
{
    use HasFactory;
    protected $fillable = ['id','name','introduction','music_path','price','singer_id','albums_id','category_id','image_path'];

    public function Singer()
    {
        return $this->belongsTo(singer::class);
    }
    public function Albums()
    {
        return $this->hasOne(album::class,'id','albums_id');
    }
    public function Category()
    {
        return $this->hasOne(category::class,'id','category_id');
    }

    public function tran()
    {
        return $this->hasOne(transaction::class,'song_id','id');
    }
}
