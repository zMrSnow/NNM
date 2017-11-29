<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{

    protected $fillable = ["title", "year", "description", "img", "type", "total_episodes", "start",
        "stop", "akihabara", "status_id"];


    public function getTitleAttribute($value) {
        return ucfirst($value);
    }
    public function setTitleAttribute($value) {
        return ucfirst($value);
    }


    public function getStatus() {
        return $this->belongsTo(Status::class, "id");
    }

    public function getGenres() {
        return $this->belongsToMany(Genre::class)->withPivot("movie_id", "genre_id");
    }
    public function getStreams() {
        return $this->belongsToMany(Stream::class)->withPivot("movie_id", "stream_id");
    }
}
