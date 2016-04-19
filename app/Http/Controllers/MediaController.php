<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Http\Requests;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $media = Media::with('author')->get();

        return view('media.list', ['media' => $media]);
    }

    public function showDetail($slug)
    {
        return view('media.register');
    }
}
