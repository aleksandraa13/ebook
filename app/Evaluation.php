<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    protected $fillable = ['title', 'content', 'evaluation', 'book_id', 'user_id'];

    public function user() {
        return $this->belongsTo('User');
    }

    public function book() {
        return $this->belongsTo('Book');
    }
}
