<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    //
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id', 'name');
    }
}
