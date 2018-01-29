@extends('creative-gh-pages.user.master')
@section('content')
    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          @foreach($courses as $course)
          <div class="col-md-3">
              <div class="card bg-primary">
                <a href="{{route('lesson.index',$course->id)}}">
                  <img class="card-img-top" height="100" width="100" src="/course/storage/app/{{$course->img}}">
                </a>
                <div class="card-body">
                  <h4 >{{$course->name}} </h4>
                  <small class="card-text">{{$course->desc}} </small>
                </div>
                <div class="card-footer">
                  <small class="text-white">يقدمها
                      {{$course->user->name}}
                  </small><br>
                  <small class="text-white">
                    بدايتها بتاريخ
                      {{$course->start}}
                  </small><br>
                  <small class="text-white">
                    نهايتها بتاريخ
                      {{$course->end}}
                  </small> <br>
                  <small class="text-white">
                    عدد المشتركين الى الآن
                  </small>  
                  <span class="badge badge-info">{{$course->subscripersNumber()}}</span>                  
                </div>
                  <form action="{{route('subscribe')}}" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <input type="hidden" name="course_id" value="{{$course->id}}">
                    <input type="hidden" name="ownercourse_id" value="{{$course->user_id}}">

                    <button type="submit" class=" badge badge-info" ><h5 class="text-white" >اشترك الآن</h5></button>                    
                  </form>
              </div>
          </div>
          
          @endforeach
        </div>    
          @if(session('status'))
            <div class="alert alert-warning">
                {{ session('status') }}
            </div>
          @endif
      </div>

    </header>
@endsection
