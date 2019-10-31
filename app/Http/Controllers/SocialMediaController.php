<?php

namespace App\Http\Controllers;

use App\Facades\Instagram;
use Illuminate\Http\Request;
use App\SocialMedia;

class SocialMediaController extends Controller
{
    public function index()
    {
        return view('index')
            ->with('user', Instagram::getUser())
            ->with('posts', Instagram::getPosts());
    }
    public function createMediaLink()
    {
        return view('social.media')
            ->with('links', SocialMedia::find(1));
    }
    public function search(Request $request)
    {
        return view('search')
            ->with('posts', Instagram::getTagPosts($request->tag));
    }
}
