<?php

namespace App\Http\Controllers;

use App\Exercise;
use App\Lesson;
use Auth;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{

    public function index($lessonid)
    {
        $lesson = Lesson::find($lessonid);
        $exercise = Exercise::where('lesson_id',$lessonid)
        ->where('user_id',Auth::user()->id)
        ->first();
        return view('creative-gh-pages.user.exercise.index',compact('exercise','lesson'));        
        
    }

    public function store(Request $request)
    {
        $this->validate($request,
    [
        'content'=>'required'
    ]);

    $exercise = new Exercise;
    $exercise->content = $request->content;
    $exercise->lesson_id = $request->lessonid;
    $exercise->user_id = Auth::user()->id;
    $exercise->save();
    return redirect(route('exercise.index',$request->lessonid))->with('status','Done');
    }

    public function edit(Exercise $exercise)
    {
        return view('creative-gh-pages.user.exercise.edit',compact('exercise'));        
    }


    public function update(Request $request)
    {
        $exercise = Exercise::find($request->exerciseid);
        $exercise->content = $request->content;
        $exercise->save();
        return redirect(route('exercise.index',$request->lessonid))->with('status','Done');
    
    }

    public function destroy(Exercise $exercise)
    {
        //
    }
}
