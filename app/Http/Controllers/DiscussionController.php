<?php

namespace App\Http\Controllers;

use App\Discussion;
use App\Lesson;
use Illuminate\Http\Request;

class DiscussionController extends Controller
{


    public function store(Request $request)
    {
        $this->validate($request,[
            'content'=>'required'
        ]);
        $discussion = new Discussion;
        $discussion->content = $request->content;
        $discussion->lesson_id = $request->lessonid;
        $discussion->user_id = $request->userid;
        $discussion->save();
        return redirect()->back()->with('status','تم ');
    }

    public function edit(Discussion $discussion)
    {
        $lesson = Lesson::find($discussion->lesson->id);
        return view('creative-gh-pages.user.discussion.edit',compact('discussion','lesson'));        
    }

    public function update(Request $request)
    {
       
        $discussion = Discussion::find($request->discussionid);
        $discussion->content = $request->content;
        $discussion->save();
        return redirect(route('lessoncontent.index',$discussion->lesson->id))->with('status','تم التعديل');
    }


    public function destroy(Discussion $discussion)
    {
        //
    }
}
