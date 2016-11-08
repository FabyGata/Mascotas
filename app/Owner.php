<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $fillable = ['name', 'address', 'birthdate', 'ci' , 'phone' ,'email', 'housetype'];
    
}
