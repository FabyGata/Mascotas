<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $fillable = ['name', 'race', 'gender' , 'color','sterilized','description','owner_id','veterinary_id'];

    public function owner(){
        return $this->belongsTo('App\Owner');
    }

    public function veterinary(){
        return $this->belongsTo('App\Veterinary');
    }
    
}
