<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PetVaccine extends Model
{
    protected $fillable = ['pet_id', 'vaccine_id'];
}
