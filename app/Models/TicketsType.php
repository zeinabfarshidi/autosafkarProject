<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketsType extends Model
{
    use HasFactory;

    protected $table = 'tickets_types';
    protected $fillable = ['name', 'content'];

    CONST CREATED_AT = null;
    CONST UPDATED_AT = null;

    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'ticket_type_id', 'id');
    }
}
