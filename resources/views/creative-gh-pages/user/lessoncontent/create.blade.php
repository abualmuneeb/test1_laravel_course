@extends('creative-gh-pages.user.master')
@section('content')

<section class="bg-primary" >
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header ">
                        <h4 class="section-heading text-primary text-center">
                        {{$lesson->title}}
                        </h4>
                    </div>
                    <div class="card-body ">
                        <form action="{{route('lessoncontent.store')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group text-center">
                                <textarea name="content"  cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-group text-center">
                                <input type="hidden" name="lessonid" value="{{$lesson->id}}" >
                                <input type="hidden" name="userid" value="{{$lesson->user_id}}" >
                                <button type='submit' class="btn btn-info " >اضف</button>
                            </div>
                        </form>   
                        <a class=" circle2 btn btn-sm btn-info" href="{{route('lessoncontent.index',$lesson->id)}}">رجوع</a>
                        
                    </div>
                </div>
                 
            </div>  
        </div>
    </div>
</section>
      
@endsection