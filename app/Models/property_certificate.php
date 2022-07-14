<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPSTORM_META\type;

class property_certificate extends Model
{
    use HasFactory;

    protected $fillable = [
    	'date_carried_out',
		'renewal_date',
		'certificate_number',
		'smoke_alarm_expiry',
		'carbon_monoxide_expiry',
		'type',
		'property_id',
		'description'
    ];
}
