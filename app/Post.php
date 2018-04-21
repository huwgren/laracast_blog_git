<?php

namespace App;


class Post extends Model
{
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function addComment($body)
    {
        Comment::create([
            'body'=>request('body'),
            'post_id'=>$this->id
        ]);

        //could also replace above with: $this->comments()->create(compact('body'));
    }
}


