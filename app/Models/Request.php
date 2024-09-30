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

    //هم منقصه و هم مزایده در Request جا میگیرند
}
