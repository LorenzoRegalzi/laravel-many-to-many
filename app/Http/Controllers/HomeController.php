<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\InfoUser;
use App\Page;
use App\Category;
use App\Photo;
use App\Tag;


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
        $user = User::find(1);
        dd($user->info);
        return view('home');
    }
}
