<?php

namespace App\Http\Controllers;

use App\Mixtape;
use App\Facades\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MixtapeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tapes = Mixtape::where('published_at', '<=', Carbon::now())
            ->orderBy('published_at', 'desc')
            ->paginate(10);
        return view('mixtapes.index')->with('mixtapes', $tapes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mixtapes = Mixtape::orderBy('mixtape_id', 'asc')
            ->get();
        return view('mixtape.create', ['mixtapes' => $mixtapes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function uploadMixtape(Request $request, Mixtape $mixtape)
    {
        $this->validate($request, [

            'title' => 'string|required|max:255',
            'mixtape_image' => 'image|required|max:1999',
            'mixtape' => 'required'

        ]);

        $mixtapeUpload = Upload::UploadFile($request, 'mixtape', 'audio');
        $image = Upload::UploadFile($request, 'mixtape_image');
        if ($mixtapeUpload) {
            if (Auth::check()) {
                // The user is logged in...
                // create Post
                $mixtape->insert(
                    [
                        'title' => $request->input('title'),
                        'mixtape' => $mixtapeUpload,
                        'image_url' => $image
                    ]
                );

                return redirect('admin/mixtape/create');
            } else {
                echo '<h3> could not update </h3>';
            }
        }
    }

    public function mixtapes()
    {
        $songs = Mixtape::get();

        return response()->json($songs)->header('Access-Control-Allow-Origin',  '*');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mixtape  $mixtape
     * @return \Illuminate\Http\Response
     */
    public function deleteMixtape(Mixtape $mixtape, $tape)
    {
        if (Upload::deleteFile('audio', $tape, 'mixtape')) {
            $mixtape::where("mixtape", "=", $tape)
                ->delete();

            return view('/mixtape/create', ['mixtapes' => Mixtape::get()]);
        }
        return redirect()->back() - with('deleted', "could not delete $tape, try again latter");
    }

    public function download($title)
    {
        // return Upload::downloadFile('audio', $title, 'mixtape');
        // return $response()->download("/public/audio/mixtape/$title");
        return response()->download(storage_path('audio') . "\mixtape\\$title", $title)
            ->header('Content-type', 'application/audio');
    }
}
