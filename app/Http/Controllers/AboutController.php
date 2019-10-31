<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\About;
use Illuminate\Http\Request;
use App\Facades\Upload;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::where('about_id', '=', 1)->get();
        return view('about.index', [
            'about' => $about,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $about = About::where('about_id', '=', 1)->get();
        return view('about.form', ['about' => $about, 'success' => '']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'body' => 'required',
            'about_image' => 'image|nullable|max:1999'
        ]);

        $fileNameToStore = Upload::UploadFile($request, 'about_image');
        if ($fileNameToStore) {
            if (Auth::check()) {
                // The user is logged in...
                // create Post
                $post = new About;
                $body = $request->input('body');
                $url = $fileNameToStore;
                $post::where('about_id', '=', 1)
                    ->update(['body' => $body, 'url' => $url]);

                return redirect(Route('about_create'))->with('success', 'Post created');
            } else {
                return redirect('/login');
            }
        } else {
            echo redirect(Route('about_create', ['error' => 'unable to upload try again latter']));
        }
    }
}
