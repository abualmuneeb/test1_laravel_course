@extends('creative-gh-pages.user.master')
@section('content')

<section class="bg-primary" >
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header ">
                        <h4 class="section-heading text-primary text-center">
                        {{$course->name}}
                        </h4>
                    </div>
                    <div class="card-body ">
                        <form action="{{route('lesson.store')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <input type="text" class="form-control" name="title" placeholder=" الدرس" >
                            </div>
                            <div class="form-group text-center">
                                <input type="hidden" name="courseid" value="{{$course->id}}" >
                                <input type="hidden" name="ownerid" value="{{$course->user_id}}" >
                                <button type='submit' class="btn btn-info " >اضف</button>
                            </div>
                        </form> 
                        <a class=" circle2 btn btn-sm btn-info" href="{{route('lesson.index',$course->id)}}">رجوع</a>
                    </div>
                </div>
                 
            </div>  
        </div>
    </div>
</section>
      
@endsection