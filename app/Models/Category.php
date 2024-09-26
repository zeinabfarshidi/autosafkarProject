<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'categories';
    protected $fillable = ['user_id', 'category_id', 'name', 'latinName', 'img', 'text'];

    public function persiannameOfTheModel()
    {
        return 'دسته بندی ها';
    }

    public function modelTitle()
    {
        return $this->name;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function posts()
    {
        return $this->morphedByMany(Post::class, 'categorizable');
    }
}
