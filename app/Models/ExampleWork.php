<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExampleWork extends Model
{
    use HasFactory;

    protected $table = 'example_works';
    protected $fillable = ['user_id', 'title', 'img'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
