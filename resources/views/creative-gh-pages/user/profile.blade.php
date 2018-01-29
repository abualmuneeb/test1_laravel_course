@extends('creative-gh-pages.user.master')
@section('content')
<style>
    .fileContainer {
      overflow: hidden;
      position: relative;
  }
  
  .fileContainer [type=file] {
      cursor: inherit;
      display: block;
      font-size: 999px;
      filter: alpha(opacity=0);
      min-height: 100%;
      min-width: 100%;
      opacity: 0;
      position: absolute;
      right: 0;
      text-align: right;
      top: 0;
  }
  
</style>

<section class="bg-info" >
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-header text-right">
                      <form name="myForm" action="{{route('storeAvatar')}}" method="post" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <input type="hidden" name="userid" value="{{Auth::user()->id}}" />
                          <label class="fileContainer">
                            <img class="circle2" src="/course/storage/app/{{Auth::user()->avatar}}"
                            height=90 width=90 alt="avatar">
                          <input type="file" name="photo" onChange="document.myForm.submit();"/>
                        </label>
                      </form>
                      <p>
                        <b class="text-danger">الاسم</b> {{Auth::user()->name}}
                      </p>
                      <p>
                        <b class="text-danger">الايميل</b>  {{Auth::user()->email}}
                      </p>
                      <p>
                        <b class="text-danger">الاسم المستعار</b>{{Auth::user()->username}}
                      </p>
                    </div>
  
                    <div class="card-block">
                      <div class="row">

                          <div class="col-lg-6">
                              <div class="card">
                                <div class="card-header text-center">
                                  <b>الدورات التي اشتركت فيها</b>
                                </div>
                                <div class="card-block">
                                  <table class="table table-bordered">
                                      @foreach($subcourses as $subcourse)
                                      <tr>
                                        <td>
                                        {{$subcourse->name}}
                                        </td>
                                      </tr>
                                      @endforeach
                                  </table>
                                </div>
                              </div>
                          </div>

                          <div class="col-lg-6">
                              <div class="card">
                                <div class="card-header text-center">
                                    <b> الدورات التي اقمتها</b>
                                </div>
                                  <table class="table table-bordered">
                                    @foreach($mycourses as $course)
                                    <tr>
                                      <td>
                                      {{$course->name}}
                                      </td>
                                    </tr>
                                    @endforeach
                                  </table>
                              </div>
                          </div>
                      </div>
                    </div>
                </div>
              <div class="card-footer text-muted">
              </div>
            </div>
            </div>
        </div>
      </section>
@endsection