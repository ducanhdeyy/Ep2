<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class User extends Authenticatable
{
    use HasFactory,HasApiTokens, AuthorizesRequests;
    protected $fillable = ['name',
        'email',
        'phone_number',
        'password',
        'wallet',
        'role',
        'image'];

    public function scopeSearch($query)
    {
        $search = request()->search;
        return $query->where('name', 'like', "%$search%");
    }
    public function trans()
    {
        return $this->hasOne(transaction::class,'user_id','id');
    }
}
