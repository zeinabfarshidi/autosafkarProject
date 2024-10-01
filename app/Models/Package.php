<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $table = 'packages';
    protected $fillable = [
        'name',
        'content',
        'thumbnail_id',
        'price',
        'active_days',
        'perquisites',
        'picutre_count'
    ];
    public $timestamps = false;

    public function upload()
    {
        return $this->belongsTo(Upload::class, 'thumbnail_id', 'id');
    }
}
