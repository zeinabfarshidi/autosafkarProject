<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metadata extends Model
{
    use HasFactory;

    protected $table = 'metadata';
    protected $fillable = ['metaable_type', 'metaable_id', 'meta_key', 'meta_value', 'parent_id'];

    public $timestamps = false;

    public function metaable()
    {
        return $this->morphTo();
    }

    public function parent()
    {
        return $this->belongsTo(Metadata::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Metadata::class, 'parent_id');
    }
}
