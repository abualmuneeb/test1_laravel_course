@extends('creative-gh-pages.admin.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h4 class="text-info mb-3 my-4">  لوحة التحكم </h4> 
            </div>
        </div>
    </div>
    &nbsp;
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h5><a href="" class="text-warning"> الدورات </a></h5>
            </div>
            <div class="alert-warning card"> 
                <table class="table table-bordered table-rounded ">
                    <thead style="background-color:#fbf9f4;">
                        <td>اسم الدورة</td>
                        <td>بداية الدورة</td>
                        <td>نهاية الدورة</td>
                        <td>حالة الدورة</td>
                        <td>يقدمها</td>
                    </thead>
                    @foreach($courses as $course)
                    <tr>
                        <td>{{$course->name}}</td>
                        <td>{{$course->start}}</td>
                        <td>{{$course->end}}</td>
                        <td>{{$course->isopen? 'مفتوح':'مغلق'}}</td>
                        <td>{{$course->user->name}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <h5><a href="" class="text-warning"> المتدربين </a></h5>
            </div> 
            <div class="alert-warning card"> 
                    <table class="table table-bordered table-rounded ">
                        <thead style="background-color:#fbf9f4;">
                            <td>اسم المتدرب</td>
                            <td>عدد الدورات المشترك فيها</td>
                        </thead>
                        @foreach($students as $student)
                        <tr>
                            <td>{{$student->name}}</td>
                            <td>{{$student->numbercourse}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
        </div> 
        <div class="col-md-12">
            <div class="card">
                <h5><a href="" class="text-warning"> المدربين </a></h5>
            </div> 
            <div class="alert-warning card"> 
                    <table class="table table-bordered table-rounded ">
                        <thead style="background-color:#fbf9f4;">
                            <td>اسم المدرب</td>
                            <td>عدد دوراته</td>
                        </thead>
                        @foreach($teachers as $teacher)
                        <tr>
                            <td>{{$teacher->name}}</td>
                            <td>{{$teacher->numbercourses()}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
        </div>                        
    </div>
</div>
@endsection
