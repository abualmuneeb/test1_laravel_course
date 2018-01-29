<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\Day;
use App\Replay;
use App\Course;
use DB;
use Auth;
use Illuminate\Http\Request;

class LessonController extends Controller
{
   
    public function index($courseid)
    {
        $course =Course::find($courseid);
        if(Auth::user()->id == $course->user_id)
        {
            //course owner
        }else
        {
            $subscribe = DB::table('courses')
            ->select(DB::raw('subscribers.user_id'))
            ->leftjoin('subscribers','courses.id','subscribers.course_id')
            ->where('subscribers.user_id',Auth::user()->id)
            ->where('subscribers.course_id',$courseid)->get();
            if(count($subscribe)>0)
            {
                //subscribed
            }else
            {
                return redirect()->back()->with('status','يجب ان تشترك');
            }
        }
        $lessons = Lesson::where('course_id',$courseid)->get();
        
        return view('creative-gh-pages.user.lesson.index',compact('lessons','course')); 
    }


    

    public function create($courseid)
    {
        $course =Course::find($courseid);
        return view('creative-gh-pages.user.lesson.create',compact('course'));
    }

   
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required'
        ]);
        $lesson = new Lesson;
        $lesson->title = $request->title;
        $lesson->course_id = $request->courseid;
        $lesson->user_id = $request->ownerid;
        $lesson->save();
        return redirect(route('lesson.index',
        ['courseid'=>$request->courseid]))->with('status','done');
    }

   
    public function show(Lesson $lesson)
    {
        //
    }

    
    public function edit(Lesson $lesson)
    {
        //
    }

   
    public function update(Request $request, Lesson $lesson)
    {
        //
    }

   
    public function destroy(Lesson $lesson)
    {
        //
    }
}
