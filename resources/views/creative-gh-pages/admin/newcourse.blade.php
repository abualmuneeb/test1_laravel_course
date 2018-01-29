@extends('creative-gh-pages.admin.master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-heading">
                    <h5 class="text-warning"> اضافة دورة جديدة </h5>                        
                </div>
                <div class="card-body">
                    <form action="{{route('postcourse')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <span class="text-info" > اسم الدورة</span>
                            <input type="text" name="name"  class="form-control">
                        </div>
                        <br>
                        <div class="form-group">
                            <span class="text-info" >  وصف قصير عن الدورة </span>
                            <input type="text" name="desc" class="form-control">
                        </div>
                        <br>
                        <div class="form-group">        
                             <span class="text-info" > بداية الدورة </span>
                            <input type="date" name="start" placeholder="بداية الدورة" class="form-control">
                        </div>
                        <br>
                        <div class="form-group">
                            <span class="text-info" >  نهاية الدورة </span>
                            <input type="date" name="end" placeholder="نهاية الدورة" class="form-control ">
                        </div>
                        <br>
                        <div class="form-group" >
                            <span class="text-info " > صورة عن الدورة</span>
                            <input type="file" name="photo" >
                        </div>
                        <br>
                        <div class="form-group"> 
                            <span class="text-info" >اسم المدرب</span>
                            <select name="user_id" class="form-control">
                                
                                @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success" >اضف</button>
                    </form>
                </div>
               
            </div> 
        </div>                     
    </div>
</div>
@endsection
