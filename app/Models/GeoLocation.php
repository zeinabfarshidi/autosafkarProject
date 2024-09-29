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
}
