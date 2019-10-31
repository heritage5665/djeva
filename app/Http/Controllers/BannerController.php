<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Facades\Upload;

class BannerController extends Controller
{


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $banner = Banner::all();
        return view('banners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Banner $banner)
    {
        $this->validate($request, [

            'caption1' => 'required|max:255',
            'caption2' => 'required|max:255',
            'banner_image' => 'image|required|max:1999'
        ]);

        $fileNameToStore = Upload::UploadFile($request, 'banner_image');
        if ($fileNameToStore) {
            if (Auth::check()) {
                // The user is logged in...
                // create Post
                $banner
                    ->insert(
                        [
                            'banner_pix' => $fileNameToStore,
                            'caption1' => $request->input('caption1'),
                            'caption2' => $request->input('caption2')
                        ]
                    );

                return redirect('admin/banners/update');
            } else {
                return redirect('admin/banners/create')->with('status', 'we are having problem with our server now please try again latter');
            }
        }
    }
}
