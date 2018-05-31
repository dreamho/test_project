<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [
        'artist', 'track', 'link'
    ];
    public $timestamps = [];
}
