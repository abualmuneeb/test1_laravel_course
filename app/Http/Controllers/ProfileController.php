<?php

namespace App\Http\Controllers;

use App\Profile;
use App\Course;
use App\User;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests\UploadRequest;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($user_id)
    {
        $mycourses = Course::where('user_id',$user_id)->get();
        $subcourses = DB::table('subscribers')
        ->select('courses.name')
        ->where('subscribers.user_id',$user_id)
        ->leftjoin('courses','subscribers.course_id','=','courses.id')->get();
        return view('creative-gh-pages.user.profile',compact('mycourses','subcourses'));
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function storeAvatar(Request $request)
    {
        if($request->hasFile('photo'))
        {
            $this->validate($request,[
                'photo' => 'required|image'
            ]);

            $imgName = $request->photo->store('public/avatar');
            $user = User::find($request->userid);
            $user->avatar = $imgName;
            $user->save();
        }
        
       return  redirect()->back()->with('status','تم');
     
    }


    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
