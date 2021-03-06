<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subgroup;
class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'Group_ID',
        'Group_Name'
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

    public function subgroup()
    {
        return $this->hasOne(Subgroup::class);
    }


}
