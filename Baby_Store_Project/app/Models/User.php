<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public $timestamps = false;

    protected $fillable = ['name','email','address','password','role'];

    protected $attributes = [  'role' => 'user' ]; 

    public function setPasswordAttribute($password){
        $this->attributes['password'] = bcrypt($password);
    }

}