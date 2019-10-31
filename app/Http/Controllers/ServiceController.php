<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Facades\Upload;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::get();
        return view('service.index', [
            'services' => $services,
            'pageTitle' => 'Servces'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::get();
        return view('service.form', [
            'services' => $services,

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->validate($request, [

            'service' => 'required',
            'service_image' => 'image|nullable|max:1999'
        ]);

        // Handle File Upload
        $image = Upload::UploadFile($request, 'service_image');
        if ($image) {
            if (Auth::check()) {
                // The user is logged in...
                // create Post
                $post = new Service;
                $post->service = $request->input('service');
                $post->image_url = $image;
                $post->save();
                return redirect(route('services'))->withSuccess('Services created');
            } else {
                return redirect(route('login'));
            }
        }
    }

    public function deleteService($id)
    {
        /*if (Upload::deleteFile($tape)) {
            $mixtape::where("mixtape", "=", $tape)
                ->delete();
            return redirect('/mixtapes')->with('success', 'mixtape deleted successsfully');
        }
        return redirect('/mixtapes')->with('error', 'mixtape not deleted, try again latter');**/
        Service::where('service_id', '=', $id)
            ->delete();
        return redirect('services');
    }
}
