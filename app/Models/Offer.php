<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $table = 'offers';
    protected $fillable = ['user_id', 'order_id', 'tender_id', 'price', 'numberDays', 'timeToDoWork', 'description'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orders()
    {
        return $this->belongsTo(Order::class);
    }

    public function tender()
    {
        return $this->belongsTo(Tender::class);
    }

    public function cooperation()
    {
        return $this->hasOne(Cooperation::class);
    }

}
