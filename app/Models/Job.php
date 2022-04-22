<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'case_no',
        'property_id',
        'subject',
        'description',
        'attachment',
        'notes',
        'address',
        'contact',
        'tenant_name',
        'status',
        'category',
        'subCategory',
        'job_time',
        'job_date',
        'payment_status',
        'cost',
        'severity'
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
