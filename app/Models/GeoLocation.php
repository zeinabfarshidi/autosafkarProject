<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeoLocation extends Model
{
    use HasFactory;

    protected $table = 'geo_locations';
    protected $fillable = ['name', 'lat', 'long', 'parent_id', 'level_name'];

    CONST CREATED_AT = null;
    CONST UPDATED_AT = null;

    public function parent()
    {
        return $this->belongsTo(GeoLocation::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(GeoLocation::class, 'parent_id');
    }
}
