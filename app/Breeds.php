<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Breeds extends Model
{
    protected $guarded = [];

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
