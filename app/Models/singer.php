<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class singer extends Model
{
    use HasFactory;
    protected $fillable = ['id','name','dob','introduction','image_path'];
}
