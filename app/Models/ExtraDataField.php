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
        'show_categories_id'
    ];
    CONST CREATED_AT = null;
    CONST UPDATED_AT = null;

    public function category()
    {
        return $this->belongsTo(Category::class, 'show_categories_id', 'id');
    }

    public function extra_data()
    {
        return $this->hasMany(ExtraData::class, 'extra_data_field_id', 'id');
    }
}
