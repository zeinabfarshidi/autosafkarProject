<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';
    protected $fillable = ['user_id', 'commentable_id', 'commentable_type', 'text', 'status', 'score'];

    public function persiannameOfTheModel()
    {
        return 'پاسخ ها';
    }

    public function modelTitle()
    {
        return $this->commentable->modelTitle();
    }

    public function created_at_difference()
    {
        Carbon::setLocale('fa');
        return Carbon::parse($this->created_at)->diffForHumans();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function commentable()
    {
        return $this->morphTo();
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
