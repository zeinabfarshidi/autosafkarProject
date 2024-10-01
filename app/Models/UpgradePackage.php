<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UpgradePackage extends Model
{
    use HasFactory;

    protected $table = 'upgrade_packages';
    protected $fillable = ['name', 'content', 'interval', 'price', 'thumbnail_id'];

    CONST CREATED_AT = null;
    CONST UPDATED_AT = null;

    public function upload()
    {
        return $this->belongsTo(Upload::class, 'thumbnail_id', 'id');
    }
}
