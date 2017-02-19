<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
	public $table = 'vendor_contacts';
    //
    protected $fillable = [
        'vendor_id',
        'email',
        'phone_number'
    ];
}
