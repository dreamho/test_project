<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 30.5.18.
 * Time: 13.08
 */

namespace App\Http\Controllers\Api;

use App\Http\Requests\SaveEditSong;
use App\Http\Resources\Song as SongResource;
use App\Http\Controllers\Controller;
use App\Model\Song as SongModel;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

/**
 * Class SongApi
 * @package App\Http\Controllers\Api
 */
class SongApi extends Controller
{
    /**
     * Return songs depending on status of logged user
     * If is admin returns all songs, if is regular user returns only his songs
     * @param Request $request
     * @return SongResource collection
     */
    public function get(Request $request)
    {
        $user = $request->user();
        if($user->status == 'user'){
            $songs = \App\Model\User::find($user->id)->songs()->orderBy('created_at', 'desc')->get();
        }
        elseif($user->status == 'admin'){
            $songs = SongModel::all();
        }
        return SongResource::collection($songs);
    }

    /**
     * Save new song
     * @param SaveEditSong $request
     * @return SongResource|JsonResponse
     */
    public function save(SaveEditSong $request)
    {
        try {
            $user = $request->user();
            $song = $user->songs()->create([
                'artist' => $request->artist,
                'track' => $request->track,
                'link' => $request->link,
            ]);
            return new SongResource($song);
        } catch (\Exception $exception) {
            return new JsonResponse("Something goes wrong", 400);
        }
    }

    /**
     * Get a song by id to fill the form for updating data
     * @param int $id
     * @return SongResource
     */
    public function getById($id)
    {
        $song = SongModel::find($id);
        return new SongResource($song);

    }

    /**
     * Updating song
     * @param SaveEditSong $request
     * @return SongResource|JsonResponse
     */
    public function edit(SaveEditSong $request)
    {
        try {
            $song = SongModel::find($request->id);
            $song->artist = $request->artist;
            $song->track = $request->track;
            $song->link = $request->link;
            $song->save();
            return new SongResource($song);
        } catch (\Exception $exception) {
            return new JsonResponse("Something goes wrong");
        }
    }

    /**
     * Delete song by id
     * @param int $id
     */
    public function delete($id)
    {
        SongModel::destroy($id);
    }
}