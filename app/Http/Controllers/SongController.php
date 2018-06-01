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

/**
 * Class SongController
 * @package App\Http\Controllers
 */
class SongController extends Controller
{
    /**
     * Returns songs index view
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $amount_of_songs = Song::count();
        return view('songs.index', ['amount_of_songs' => $amount_of_songs]);
    }
}