<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type','name'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [

    ];
    function employees(){
        return $this->hasMany('App\Employee', 'company_id', 'id');
    }

}