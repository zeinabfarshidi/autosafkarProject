<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExtraData extends Model
{
    use HasFactory;

    protected $table = 'extra_data';
    protected $fillable = ['extra_dataable_type', 'extra_dataable_id', 'extra_data_field_id', 'content'];

    CONST CREATED_AT = null;
    CONST UPDATED_AT = null;

    public function extra_dataable()
    {
        return $this->morphTo();
    }

    public function extra_data_field()
    {
        return $this->belongsTo(ExtraDataField::class, 'extra_data_field_id', 'id');
    }
}
