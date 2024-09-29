<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $table = 'packages';
    protected $fillable = [
        'name',
        'content',
        'thumbnail_id',
        'price',
        'active_days',
        'perquisites',
        'picutre_count'
    ];
    CONST CREATED_AT = null;
    CONST UPDATED_AT = null;
}