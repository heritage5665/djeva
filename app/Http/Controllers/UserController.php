<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateProfile()

    {


        if (Auth::check()) {
            $id = auth()->id();
            $users = User::where('id', '=', $id)->get();

            return view('users.profile', ['users' => $users]);
        } else {
            return redirect('/home');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
        $this->validate($request, [

            'username' => 'string|required|max:255',
            'name' => 'string|max:255',
            'gender' => 'string|max:255',
            'surname' => 'string|max:255',
            'othername' => 'string|max:255',
            'email' => 'email|required|max:255',



        ]);
        $post = $user::where('id', '=', auth()->id())
            ->update(
                [
                    'username' => $request->input('username'),
                    'name' => $request->input('name'),
                    'gender' => $request->input('gender'),
                    'surname' => $request->input('surname'),
                    'othername' => $request->input('othername'),
                    'email' => $request->input('email'),
                ]
            );
        if ($post) {
            return redirect('/home');
        } else {
            return redirect()->back()->withErrors($post)->withInput();
        }
    }
}
