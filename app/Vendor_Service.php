<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor_Service extends Model
{
	public $table = 'vendor_service';
    //
    protected $fillable = [
        'vendor_id',
        'service_id'
    ];
}
