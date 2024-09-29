<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relationship extends Model
{
    use HasFactory;

    protected $table = 'relationships';
    protected $fillable = ['object_type', 'object_id', 'target_id'];

    CONST CREATED_AT = null;

    CONST UPDATED_AT = null;
}
