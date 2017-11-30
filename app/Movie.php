<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{

    protected $fillable = ["title", "year", "description", "img", "type", "total_episodes", "start",
        "stop", "akihabara", "triler", "csfd", "status_id"];

    // GET
    public function getTitleAttribute($value) {
        return ucfirst($value);
    }
    public function getStartAttribute($value) {
        return date("F j, Y", strtotime($value)); //September 30th, 2013;
    }
    public function getStopAttribute($value) {
        return date("F j, Y", strtotime($value)); //September 30th, 2013;
    }

    // SET
    public function setTitleAttribute($value) {
        return ucfirst($value);
    }



    // Methods
    public function getStatus() {
        return $this->belongsTo(Status::class, "status_id");
    }
    public function getType() {
        return $this->belongsTo(Type::class, "type_id");
    }
    public function getGenres() {
        return $this->belongsToMany(Genre::class)->withPivot("movie_id", "genre_id");
    }
    public function getStreams() {
        return $this->belongsToMany(Stream::class)->withPivot("movie_id", "stream_id");
    }
}
