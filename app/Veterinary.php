<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veterinary extends Model
{
    protected $fillable = ['name', 'address', 'doctor_name' , 'phone'];
}
