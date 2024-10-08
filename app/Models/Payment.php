<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payments';
    protected $fillable = [
        'payment_gateway_id',
        'price',
        'payementable_type',
        'payementable_id',
        'payment_type',
        'payment_note',
        'payment_status',
        'discount_type',
        'discount_name',
        'discount_price',
    ];

    public function payementable()
    {
        return $this->morphTo();
    }
}
