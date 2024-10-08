<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentGateway extends Model
{
    use HasFactory;

    protected $table = 'payment_gateways';
    protected $fillable = ['name', 'thumbnail_id', 'desc', 'settings'];

    public $timestamps = false;

    public function upload()
    {
        return $this->belongsTo(Upload::class, 'thumbnail_id', 'id');
    }

    public function payments()
    {
        return $this->morphMany(Payment::class, 'commentable');
    }
}
