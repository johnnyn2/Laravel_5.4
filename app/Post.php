<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // table name
    protected $table = 'posts';
    // primary key
    public $primaryKey = 'id';
    // timestamp
    public $timestamps = true;

    // Post has a relationship with user and belongs to user
    public function user() {
        return $this->belongsTo('App\User');
    }
}
