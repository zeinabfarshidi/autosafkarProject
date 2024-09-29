<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $fillable = ['name', 'desc', 'thumbnail_id', 'parent_id'];

    CONST CREATED_AT = null;
    CONST UPDATED_AT = null;
}
