<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $table = 'likes';
    protected $fillable = ['likeable_type', 'likeable_id', 'user_id', 'like_type'];

//    پلی مورفیک یا کامنت ها و اگهی و تیگت ها

}
