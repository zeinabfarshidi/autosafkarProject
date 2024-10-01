<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    protected $table = 'requests';
    protected $fillable = [
        'user_id',
        'ad',
        'request_type',
        'price',
        'max_price',
        'title',
        'content',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function ad()
    {
        return $this->belongsTo(Ad::class, 'ad', 'id');
    }
}
