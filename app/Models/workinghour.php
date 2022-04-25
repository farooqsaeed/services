<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class workinghour extends Model
{
    use HasFactory;

    protected $fillable = [
        'Mon',
        'Tues',
        'Wed',
        'Thur',
        'Fri',
        'Sat',
        'Sun',
        'user_id'
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
