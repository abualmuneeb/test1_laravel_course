@extends('creative-gh-pages.user.master')
@section('content')


<section class="bg-primary" >
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          @if(count($exercise)>0)
          <div class="card-header">{{$exercise->id}} </div>
          <div class="card-body">
              {!!$exercise->content!!}
          </div>
          <a href="{{route('exercise.edit',$exercise->id)}}">تعديل</a>
          @else
          
          <div class="card-footer">
            <form action="{{route('exercise.store')}}" method="post">
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
          @endif
      </div>
          <a class=" circle2 btn btn-sm btn-info" href="{{route('lessoncontent.index',$lesson->id)}}">رجوع</a>
      </div>
    </div>
  </div>
</section>
      
@endsection