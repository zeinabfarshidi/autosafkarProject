<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeoBase extends Model
{
    use HasFactory;

    protected $table = 'seo_bases';
    protected $fillable = ['seoable_type', 'seoable_id', 'seo_title', 'seo_description', 'settings'];
}
