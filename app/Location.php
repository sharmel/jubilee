<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
	public $table = 'vendor_locations';
    //
    protected $fillable = [
        'contacts_id',
        'street_number',
        'street_name',
        'city',
        'post_code'
    ];
}
