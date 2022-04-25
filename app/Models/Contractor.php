<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contractor extends Model
{
    use HasFactory;

    protected $fillable = [
        'business_name',
        'first_name',
        'last_name',
        'email',
        'landline_no',
        'mobile_no',
        'house_no',
        'street_name',
        'town_city',
        'postal_code',
        'rate_option',
        'rate',
        'preferred_communication',
        'area_of_coverage',
        'isMobile',
        'approved_by',
        'Recommendation',
        'notes'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
