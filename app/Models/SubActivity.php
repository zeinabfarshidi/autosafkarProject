<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubActivity extends Model
{
    use HasFactory;

    protected $table = 'sub_activities';
    protected $fillable = ['user_id', 'title'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
