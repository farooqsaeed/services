<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gaurd extends Model
{
    use HasFactory;

    public $fillable = [
    	'Guard_Name',
		'Guard_Email',
		'Guard_Contact',
		'Notes',
		'property_id',
		'status'
    ]; 
}
