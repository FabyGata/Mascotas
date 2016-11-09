<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $fillable = ['name', 'race', 'gender' , 'color','sterilized','description','owner_id','veterinary_id'];
}
