<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 30.5.18.
 * Time: 13.08
 */

namespace App\Http\Controllers\Api;

use App\Http\Resources\Song as SongResource;
use App\Http\Controllers\Controller;
use App\Model\Song as SongModel;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SongApi extends Controller
{
    public function get(Request $request)
    {
        $user = $request->user();
        if($user->status == 'admin'){
            $songs = SongModel::all();
        }
        if($user->status == 'user'){
            $songs = \App\User::find($user->id)->songs()->orderBy('created_at', 'desc')->get();
        }
        return SongResource::collection($songs);
    }

    public function save(Request $request)
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

    public function getById($id)
    {
        $song = SongModel::find($id);
        return new SongResource($song);

    }

    public function edit(Request $request)
    {
        $data = [];
        $data['artist'] = $request->artist;
        $data['track'] = $request->track;
        $data['link'] = $request->link;

        $rules = [
            'artist' => 'required',
            'track' => 'required',
            'link' => 'required',
        ];
        $res = Validator::make($data, $rules);
        $errors = $res->errors()->toArray();
        if (count($errors) > 0) {
            foreach ($errors as $error) {
                foreach ($error as $value) {
                    $messages[] = $value;
                }
                $errors = ['message' => $messages];
                return new JsonResponse($errors);
            }
        }
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

    public function delete($id)
    {
        SongModel::destroy($id);
    }
}