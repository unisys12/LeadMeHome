<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dogs extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Resolve the breed of a dog
     * 
     * @return resource
     */
    public function breed()
    {
        return $this->belongsTo('App\Breed');
    }

    public function gender()
    {
        return $this->belongsTo('App\Gender');
    }
}
