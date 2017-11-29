<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stream extends Model
{
    protected $fillable = ["episode", "name", "link_stream", "link_mega", "link_ulozto"];

    public function getComments()
    {
        return $this->belongsToMany(Comment::class)->withPivot("stream_id", "comment_id");
    }
}
