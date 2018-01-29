<?php

namespace App\Http\Controllers;

use App\Course;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Coursephoto;
use Illuminate\Http\Request;
use App\Http\Requests\UploadRequest;
use DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        return view('creative-gh-pages.user.course.index',compact('courses'));        
    }


    public function newCourse()
    {
        $users = User::where('isteacher',1)->get();
        return view('creative-gh-pages.admin.newcourse',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    
        $this->validate($request,
        [
            'name'=>'required',
            'desc'=>'required',
            'start'=>'required',
            'end'=>'required',
            'user_id'=>'required'
        ]) ;
        $url='public/courses/course.png';
        $course = new Course;
        if($request->hasFile('photo'))
        {
            $this->validate($request,[
                'photo' => 'required|image'
            ]);
            $course->img = $request->photo->store('public/courses');
        }else{
           $course->img = $url; 
        }
        
        $course->name = $request->name;
        $course->desc = $request->desc;
        $course->start = $request->start;
        $course->end = $request->end;
        $course->user_id = $request->user_id;
       $course->save();
        return redirect(route('admin.dashboard'));
       
    }

    public function subscribe(Request $request)
    {
        if($request->user_id==$request->ownercourse_id)
        {
            return redirect()->back()->with('status','انت صاحب الدورة');
        }else{
            $subscribe = DB::table('subscribers')->where('user_id',$request->user_id)
            ->where('course_id',$request->course_id)->get();
            $user = User::find($request->user_id);

            if(count($subscribe)>0)
            {
                return  redirect()->back()->with('status',' تم الاشتراك سابقا');
            }else{
                $user->coursesSubscripedIn()->attach($request->course_id);
                return  redirect()->back()->with('status',' تم الاشتراك ');
            }

        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
}
