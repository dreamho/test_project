<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 30.5.18.
 * Time: 11.20
 */

namespace App\Http\Controllers;


class PageController extends Controller
{
    public function index()
    {
        return view('home.index');
    }
    public function exampleone()
    {
        return view('home.example_one');
    }
    public function exampletwo()
    {
        return view('home.example_two');
    }
}