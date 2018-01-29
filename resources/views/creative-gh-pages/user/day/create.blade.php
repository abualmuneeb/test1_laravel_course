@extends('creative-gh-pages.user.master')
@section('content')
<section class="bg-primary" >
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header ">
                            <h4 class="section-heading text-info text-center">
                                يجب اضافة اليوم قبل اضافة الدرس
                            </h4>
                        </div>
                        <div class="card-body ">
                            <div class="form-group text-center">
                                <form action="{{route('addDay')}}" method="post" >
                                    {{csrf_field()}}
                                    <input type="hidden" value="{{$dayscount}}" name="dayscount">
                                    <input type="hidden" value="{{$courseid}}" name="courseid">
                                    <button type='submit' class="btn btn-info " >
                                            اضف يوم
                                    </button> 
                                    <a class="btn btn-success " href="{{route('createlesson',['courseid'=>$courseid])}}">
                                        اضف الدرس
                                    </a>
                                </form>
                            </div>
                            <div class="form-group">
                                <table class="table"> 
                                    @foreach($days as $day)
                                    <tr>
                                         
                                        <td>
                                            <h5 class="text-right">
                                                <span class="text-info">درس اليوم </span>{{$day->name}} &nbsp;     
                                            </h5> 
                                        </td>
                                        <td>
                                            <a href="" 
                                                onclick="event.preventDefault();
                                                         document.getElementById('delete-form').submit();">
                                                <span class="">X</span>
                                            </a>
                                
                                            <form id="delete-form" action="{{ route('day.destroy',$day->id) }}" method="POST">
                                                {{ csrf_field() }}
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        
                                         
                                    </tr>
                                </table>
                            </div>
                            
                        </div>
                    </div> 
                </div>  
            </div>
        </div>
    </section>
@endsection