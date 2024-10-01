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

    public function ads()
    {
        return $this->hasMany(Ad::class, 'category_id', 'id');
    }

    public function extraDataFields()
    {
        return $this->hasMany(ExtraDataField::class, 'show_categories_id', 'id');
    }

    public function upload()
    {
        return $this->belongsTo(Upload::class, 'thumbnail_id', 'id');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
}
