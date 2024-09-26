<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechnicalDegree extends Model
{
    use HasFactory;

    protected $table = 'technical_degrees';
    protected $fillable = ['user_id', 'img', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
