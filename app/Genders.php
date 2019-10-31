<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genders extends Model
{
    /**
     * A Breed can belong to many Dogs
     * 
     * @return resource
     */
    public function dogs()
    {
        return $this->hasMany('App\Dogs');
    }
}