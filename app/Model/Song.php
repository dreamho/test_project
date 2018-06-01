<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Song
 * @package App\Model
 */
class Song extends Model
{
    protected $fillable = [
        'artist', 'track', 'link'
    ];
    public $timestamps = [];
}
