@extends('creative-gh-pages.user.master')
@section('content')

<section class="bg-primary" >
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header"></div>
            <div class="card-body text-center">
                <form action="{{route('exercise.update')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <textarea name="content"  cols="30" rows="10">
                                {!!$exercise->content!!}
                        </textarea>
                    </div> 
                    <div class="form-group">
                        <input type="hidden" name="exerciseid" value="{{$exercise->id}}">
                        <input type="hidden" name="lessonid" value="{{$exercise->lesson_id}}">
                        <button type="submit" class="btn btn-success">
                            تعديل
                        </button>
                    </div>  
                </form>
            </div>
            
        </div>
      </div>
    </div>
  </div>
</section>
      
@endsection