<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\User;
use DB;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        $teachers = User::where('isteacher',1)->get();

        $students = DB::table('subscribers')
        ->select(DB::raw('count(subscribers.id) AS numbercourse, users.name'))
        ->leftjoin('users','users.id','=','subscribers.user_id')
        ->groupBy('users.name')->get();
        
        return view('creative-gh-pages.admin.index',compact('courses','teachers','students'));
    }
}
