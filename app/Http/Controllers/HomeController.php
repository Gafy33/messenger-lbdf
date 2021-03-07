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
    public function index($id = null)
    {
        $route = (in_array(\Request::route()->getName(), ['user', config('chatify.path')]))
            ? 'user'
            : \Request::route()->getName();

        // prepare id
        return view('Chatify::pages.app', [
            'id' => ($id == null) ? 0 : $route . '_' . $id,
            'route' => $route,
            'messengerColor' => Auth::user()->messenger_color,
            'dark_mode' => Auth::user()->dark_mode < 1 ? 'light' : 'dark',
        ]);
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
