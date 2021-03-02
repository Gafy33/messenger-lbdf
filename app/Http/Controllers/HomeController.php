<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\User;

use Illuminate\Http\Request;

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
        
        $client = User::find($request->id);

        $client->delete();

        return 'l utilisateur a bien été supprimé';

    }
}
