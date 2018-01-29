<?php

namespace App\Http\Controllers;

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
     * @return \Illuminate\Http\Response
     */
    public function main()
    {
        return view('creative-gh-pages.user.main');
    }

    public function index()
    {
        return view('creative-gh-pages.user.index');
    }

    public function upload(Request $request)
    {
        return asset('storage/imgs/avatar.png');
    }
}