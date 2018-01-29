@extends('creative-gh-pages.user.master')
@section('content')

<section class="bg-primary" >
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header"></div>
            <div class="card-body text-center">
                <form action="{{route('lessoncontent.update')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <textarea name="content"  cols="30" rows="10">
                            {{$lessoncontent->content}}
                        </textarea>
                    </div> 
                    <div class="form-group">
                        <input type="hidden" name="lessoncontentid" value="{{$lessoncontent->id}}">
                        <button type="submit" class="btn btn-success">
                            تعديل
                        </button>
                        <a class=" circle2 btn btn-sm btn-info" href="{{route('lessoncontent.index',$lesson->id)}}">رجوع</a>                        
                    </div>  
                </form>
            </div>
            
        </div>
      </div>
    </div>
  </div>
</section>
      
@endsection