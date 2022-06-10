<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobnote extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_id',
        'note',
    ];
}
