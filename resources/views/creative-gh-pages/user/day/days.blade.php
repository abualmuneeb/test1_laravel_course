@extends('creative-gh-pages.user.master')
@section('content')


<section class="bg-primary" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="card">
                    <div class="card-header ">
                        <h4 class="section-heading text-primary text-center">
                            الايام
                        </h4>
                    </div>
                    <div class="card-body">
                            @foreach($days as $day)
                            <h5 class="alert alert-info text-center ">
                                <a class="btn"  href="{{route('courses',['courseid'=>$courseid,'userid'=>$teacherid,'dayid'=>$day->id])}}">
                                    <span class="text-warning ">درس اليوم </span> {{$day->name}} 
                                </a>
                             </h5>                                  
                          @endforeach

                        @if($teacherid == Auth::user()->id)
                            <div class="col-lg-12 text-center">
                                <a href="{{route('createDay',$courseid)}}" class='btn btn-success'>
                                    اضافة يوم
                                </a>
                            </div>
                        @else
                            @if(count($days)>0)
                            @else
                                <div class="col-lg-12 text-center">
                                    <div class="alert alert-info">لم يتم اضافة الدروس</div>
                                </div>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
      </section>
      
@endsection