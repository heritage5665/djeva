<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\{About, Banner, Service, SocialMedia, Mixtape, Event, Newsletter};

class AppController extends Controller
{

    public function index()
    {

        $about = About::get();
        $service = Service::get();
        $banner = Banner::get();
        $subscribers = Newsletter::get();
        $social_media = SocialMedia::get();

        $mixtape = Mixtape::get();
        $event = Event::get();
        $date = [];
        foreach ($event as $ev) {
            $date = explode('-', $ev->event_date);
        }


        return view('main.index', [
            'about' => $about,
            'services' => $service,
            'banners' => $banner,
            'subscribers' => $subscribers,
            'social_media' => $social_media,
            'mixtapes' => $mixtape,
            'events' => $event,
            'event_date' => $date


        ]);
    }

    /**
     * Store a new subscriber into  thr database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function subscribe(Request $request)
    {
        $this->validate($request, [

            'email' => 'required',
            'accept' => 'required'

        ]);
        $user_email = $request->input('email');
        if (!NewsLetter::where('email', '=', $user_email)->get()) {
            // create Post
            $post = new Newsletter();
            $post->email = $user_email;
            $post->save();
            return redirect(route('djevalastin'))->withSuccess('Email registered');
        } else {
            return redirect(route('djevalastin'))->withErrors('Email already exits, Pls input a new email');
        }
    }
}
