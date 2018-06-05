<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 5.6.18.
 * Time: 13.21
 */

namespace App\Http\Controllers\Api;


class UserApi
{
    public function login(){

    }
    public function register(){

    }
//    public function authenticate(Request $request)
//    {
//        // grab credentials from the request
//        $credentials = $request->only('email', 'password');
//
//        try {
//            // attempt to verify the credentials and create a token for the user
//            if (! $token = JWTAuth::attempt($credentials)) {
//                return response()->json(['error' => 'invalid_credentials'], 401);
//            }
//        } catch (JWTException $e) {
//            // something went wrong whilst attempting to encode the token
//            return response()->json(['error' => 'could_not_create_token'], 500);
//        }
//
//        // all good so return the token
//        return response()->json(compact('token'));
//    }
}