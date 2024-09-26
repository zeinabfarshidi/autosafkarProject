<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $table = 'tickets';
    protected $fillable = ['user_id', 'ticketable_type', 'ticketable_id ', 'text'];

    public function created_at_difference()
    {
        Carbon::setLocale('fa');
        return Carbon::parse($this->created_at)->diffForHumans();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ticketable()
    {
        return $this->morphTo();
    }

    public function tickets()
    {
        return $this->morphMany(Ticket::class, 'ticketable');
    }
}
