<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $table = 'tickets';
    protected $fillable = ['ticket_type_id', 'subject', 'base_question', 'status'];

// موف منی با کامنت ها
}
