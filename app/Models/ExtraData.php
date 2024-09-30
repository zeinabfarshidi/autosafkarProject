<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExtraData extends Model
{
    use HasFactory;

    protected $table = 'extra_data';
    protected $fillable = ['extra_dataable_id', 'extra_dataable_type', 'extra_data_field_id', 'content'];

    //belogto ExtraDataField
//    پلی مورفیک  دارد با آگهی

    CONST CREATED_AT = null;
    CONST UPDATED_AT = null;
}
