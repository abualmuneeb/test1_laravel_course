@extends('creative-gh-pages.user.master')
@section('content')


<section class="bg-primary" >
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header text-center">
            <h4 class="text-info">{{$lesson->title}}</h4>
          </div>
              <div class="card-body ">
                @if(count($lessoncontents)>0)
                @foreach($lessoncontents as $lessoncontent)
                    <p class="text-right">
                      {!!$lessoncontent->content!!}
                    </p>
                    <a href="{{route('lessoncontent.edit',$lessoncontent->id)}}">تعديل</a>
                    <hr>
                
                @endforeach
                @else
              <div class="alert text-center">لايوجد درس</div>
                @if($course->user_id == Auth::user()->id)
                <a class="btn btn-success" href="{{route('lessoncontent.create',$lesson->id)}}">جديد</a>
                @endif
              @endif
          </div>
          <div class="card-footer">
              @if(count($lessoncontents)>0)
                <a class=" circle2 btn btn-sm btn-info" href="{{route('lesson.index',$lesson->course->id)}}">رجوع</a>
                @if($lessoncontent->user_id == Auth::user()->id)
                <a class="btn btn-success" href="{{route('lessoncontent.create',$lesson->id)}}">جديد</a>
                @endif
                <a class="btn btn-success" href="{{route('exercise.index',$lesson->id)}}">تمرين</a>
                <a class="btn btn-success" href="{{route('point.index',$lesson->id)}}">النقاط</a>
              @endif
            </div>
        </div>
        <hr>
        @if(count($lessoncontents)>0)
          <div class="card">
              <div class="card-header text-center">
                <h4 class="text-info">مناقشة</h4>
              </div>
                <div class="card-body ">
                @foreach($discussions as $discussion)
                <p class="text-right">{!!$discussion->content!!}</p>
                <a href="{{route('discussion.edit',$discussion->id)}}">تعديل</a>
                 <i class="text-info circle2"> <small>كتبه:{{$discussion->user->username}}</small></i>
                  
                  <hr>
                @endforeach
                </div>
                <div class="card-footer">
                    <form action="{{route('discussion.store')}}" method="post">
                      {{csrf_field()}}
                        <div class="form-group text-center">
                            <textarea name="content" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="lessonid" value="{{$lesson->id}}">
                            <input type="hidden" name="userid" value="{{Auth::user()->id}}">
                            <button type="submit"  class="btn btn-success">ارسال</button>
                        </div>
                    </form>
                </div>
            </div>
          @endif
      </div>
    </div>
  </div>
</section>
      
@endsection