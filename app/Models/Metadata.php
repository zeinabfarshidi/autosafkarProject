<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metadata extends Model
{
    use HasFactory;

    protected $table = 'metadata';
    protected $fillable = ['metaable_id', 'metaable_type', 'meta_key', 'meta_value', 'parent_id'];

    CONST CREATED_AT = null;

    CONST UPDATED_AT = null;
}
