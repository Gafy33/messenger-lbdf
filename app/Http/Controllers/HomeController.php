<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Response;
use Chatify\Http\Models\Message;
use Chatify\Http\Models\Favorite;
use Chatify\Facades\ChatifyMessenger as Chatify;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        //$file = $request->file('file');
        $rest = substr($request->id, 0, 8);   // retourne "f"
        if($rest == "https://")
            {
                $url = '<a href="' . $request->id . '">' . $request->id . '</a>'; 
            }
        else 
        {
            $rest = \substr($request->id, 0, 7);
            if($rest == "http://")
                {
                    $url = '<a href="' . $request->id . '">' . $request->id . '</a>'; 
                } else
                {
                    $url = $request->id; 
                }
        }

        return $url;

    }

    /*
    $rest = substr($request->id, 0, 8);   // retourne "f"
        if($rest == "https://")
            {
                $url = '<a href="' . $request->id . '">' . $request->id . '</a>'; 
            }
        else 
        {
            $rest = \substr($request->id, 0, 7);
            if($rest == "http://")
                {
                    $url = '<a href="' . $request->id . '">' . $request->id . '</a>'; 
                } else
                {
                    $url = $request->id; 
                }
        }

        return $url;
        */
}
