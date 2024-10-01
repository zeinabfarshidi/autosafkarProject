<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketsType extends Model
{
    use HasFactory;

    protected $table = 'tickets_types';
    protected $fillable = ['name', 'content'];

    public $timestamps = false;

    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'ticket_type_id', 'id');
    }
}
