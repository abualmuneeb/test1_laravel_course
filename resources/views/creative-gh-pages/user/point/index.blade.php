@extends('creative-gh-pages.user.master')
@section('content')


<section class="bg-primary" >
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        
        <div class="card">
          <div class="card-header">
            <h4 class="text-right text-info">{{$lesson->title}}</h4>
          </div>
            <div class="card-body">
              <table class="table table-bordered ">
                    <tr>
                        <td>الدرس</td>
                        <td>المتدرب</td>
                        <td>التمرين</td>
                        <td>الحضور</td>
                        <td>اشياء اخرى</td>
                        <td>ملاحظة</td>
                        <td>المجموع</td>                        
                    </tr>
                    @foreach($points as $point)
                    <tr>
                        <td>{{$point->lesson->title}}</td>
                        <td>{{$point->user->name}}</td>
                        <td>{{$point->exercise}}</td>
                        <td>{{$point->attend}}</td>
                        <td>{{$point->other}}</td>
                        <td>{{$point->remark}}</td>
                        <td>{{$point->total}}</td>
                    </tr>
                    @endforeach
              </table>
            </div>
            <div class="card-footer">
                <a class=" circle2 btn btn-sm btn-info" href="{{route('lessoncontent.index',$lesson->id)}}">رجوع</a>
            </div>
        </div>
      </div>
      
    </div>
  </div>
</section>
      
@endsection