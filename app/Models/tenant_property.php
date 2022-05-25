<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Property;
use App\Models\Tenant;


class tenant_property extends Model
{
    use HasFactory;

    protected $fillable = [
        'tenant_id',
		'property_id',
		'tenancy_start_date',
		'tenancy_last_date',
		'status',
		'IsExpired'
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

    public function properties()
    {
        return $this->hasMany(Property::class);
    }

    public function tenant_properties()
    {
        return $this->belongsTo(Tenant::class);
    }

    
}
