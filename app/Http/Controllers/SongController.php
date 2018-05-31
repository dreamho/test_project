<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 30.5.18.
 * Time: 12.08
 */

namespace App\Http\Controllers;


use App\Model\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index(Request $request)
    {
        $amount_of_songs = Song::count();
        return view('songs.index', ['amount_of_songs' => $amount_of_songs]);
    }
}