<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Post extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function accessibleComments($user)
    {
        if ($user->role == 'admin') {
            return $this->comments()->get();
        }
        return $this->comments()->where('user_id',$user->id)->get();
    }

    public function isAccessable($user)
    {
        if ($user->role == 'admin' || $this->user_id == $user->id) {
            return true;
        }

        return false;
    }

    public static function accessable($user)
    {
        if ($user->role == 'admin') {
            return self::all();
        }

        if ($user->role == 'author') {
            return self::where('user_id',$user->id)->get();
        }
    }
}
