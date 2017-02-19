<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $guarded = [
        'first_name',
        'last_name',
        'username',
        'created_at'

    ];

    public function services(){

    	return $this->belongsToMany('App\Service', 'vendor_service');
    }
}
