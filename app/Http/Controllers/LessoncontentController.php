<?php

namespace App\Http\Controllers;

use App\Lessoncontent;
use App\Discussion;
use App\Lesson;
use Illuminate\Http\Request;

class LessoncontentController extends Controller
{

    public function index($lessonid)
    {
        $lesson = Lesson::find($lessonid);
        $lessoncontents = Lessoncontent::where('lesson_id',$lessonid)->get();
        $discussions = Discussion::where('lesson_id',$lessonid)->get();
        return view('creative-gh-pages.user.lessoncontent.index',compact('lesson','lessoncontents','discussions'));        
        
    }

    public function create($lessonid)
    {
        $lesson =Lesson::find($lessonid);
        return view('creative-gh-pages.user.lessoncontent.create',compact('lesson'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'content'=>'required'
        ]);

        $lecon = new Lessoncontent;
        $lecon->content = $request->content;
        $lecon->lesson_id = $request->lessonid;
        $lecon->user_id = $request->userid;
        $lecon->save();
        return redirect(route('lessoncontent.index',$request->lessonid))->with('status','Done');
    }


    public function edit(Lessoncontent $lessoncontent)
    {
        $lesson = Lesson::find($lessoncontent->lesson->id);
        return view('creative-gh-pages.user.lessoncontent.edit',compact('lessoncontent','lesson'));        
    }


    public function update(Request $request)
    {
        $lessoncontent = Lessoncontent::find($request->lessoncontentid);
        $lessoncontent->content = $request->content;
        $lessoncontent->save();
        return redirect(route('lessoncontent.index',$lessoncontent->lesson->id))->with('status','تم التعديل');
    }


    public function destroy(Lessoncontent $lessoncontent)
    {
        //
    }
}
