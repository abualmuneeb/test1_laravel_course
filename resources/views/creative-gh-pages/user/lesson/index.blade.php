@extends('creative-gh-pages.user.master')
@section('content')


<section class="bg-primary" >
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3 class="text-info text-center">{{$course->name }}</h3>
        <smal class="text-success">يقدمها: {{$course->user->name}}</smal>
        <a class=" circle2 btn btn-sm btn-info" href="{{route('course')}}">رجوع</a>
        @if($course->user_id == Auth::user()->id)
        <a href="{{route('lesson.create',$course->id)}}" class=" circle2 btn btn-sm btn-info">جديد</a>
        <a class="circle2 btn btn-sm btn-info" href="">تمرين</a>
        <a class="circle2 btn btn-sm btn-info" href="">النقاط</a>
        @endif
        @if(count($lessons)>0)
        @foreach($lessons as $lesson)
        <div class="card">
          <div class="card-header"> <i>{{$lesson->created_at}} </i></div>
          <a href="{{route('lessoncontent.index',['lessonid'=>$lesson->id])}}">
            <div class="card-body text-right">
                {{$lesson->title}}
            </div>
          </a>
        </div>
        @endforeach
        @else
          <div class="alert alert-danger text-right">لايوجد درس</div>
        @endif
      </div>
    </div>
  </div>
</section>
      
@endsection