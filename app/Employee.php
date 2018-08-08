<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company_id', 'name'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [

    ];
    function company(){
    	return $this->belongsTo('App\Company', 'company_id', 'id');
    }
}