<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Facades\Upload;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Event::orderBy('event_id')->get();
        return view('events.index', [
            'events' => $event,
            'pageTitle' => 'Events',

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $events = Event::get();
        return view('events.form', [
            'events' => $events,
            'success' => ''
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
        $this->validate($request, [

            'description' => 'string|required|max:255',
            'date'      => 'string|required',
            'event_image' => 'image|nullable|max:1999'
        ]);

        $fileNameToStore = Upload::UploadFile($request, 'event_image');
        if ($fileNameToStore) {

            if (Auth::check()) {
                // The user is logged in...
                // create Post
                $post = new Event;
                $post->description = $request->input('description');
                $post->event_date = $request->input('date');
                $post->image_url = $fileNameToStore;
                $post->save();
                return redirect('/events/create')->with('success', 'Post created');
            } else {
                return redirect('/login')->withHeaders(' login before you update about');
            }
        }
    }

    public function deleteEvent($id)
    {
        Event::where('event_id', '=', $id)
            ->delete();
        return view('/events/create');
    }
}
