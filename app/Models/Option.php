<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    protected $table = 'options';
    protected $fillable = ['option_key', 'option_value'];

    CONST CREATED_AT = null;
    CONST UPDATED_AT = null;
}
