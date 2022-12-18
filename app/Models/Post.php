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
