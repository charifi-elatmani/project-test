<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citie extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cities';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];



    public function deleveryTimes(){

        return $this->belongsToMany(DeliveryTime::class)->using(CitieDeliveryTime::class)->withPivot('id');
    }


    public function partners(){
        return $this->hasMany(Partner::class);
    }


}
