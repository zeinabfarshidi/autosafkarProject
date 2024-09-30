<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExtraDataField extends Model
{
    use HasFactory;

    protected $table = 'extra_data_fields';
    protected $fillable = [
        'name',
        'type',
        'settings',
        'show_categories_id' // با category ریلیشن دارد belongTo
    ];
    CONST CREATED_AT = null;
    CONST UPDATED_AT = null;
}
