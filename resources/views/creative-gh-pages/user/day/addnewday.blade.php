@extends('creative-gh-pages.user.master')
@section('content')
<section class="bg-info" >
        <div class="container">
          <div class="row">
  
            <div class="col-lg-12 text-center">
              
                <hr class="light my-4">
                <form action="">
                  <button type="submit" class="badge badge-pill badge-primary">+</button>
                </form>
                <hr class="light my-4">
                <div class="card">
                    <div class="card-header h-bg">
                        <h4 class=" text-primary text-center">
                          php course
                        </h4>
                    </div>
              </div>
              <div class="card">
                <div class="card-header ">
                    <h4 class="section-heading text-primary text-center">
                      <span class="text-warning">اليوم</span> الاول
                    </h4>
                    <form action="">
                      <button type="submit" class="badge badge-pill badge-danger">X</button>
                    </form>
                </div>
              </div>
              <div class="card">
                  <div class="card-header ">
                      <h4 class="section-heading text-primary text-center">
                        <span class="text-warning">اليوم</span> الثاني
                      </h4>
                      <form action="">
                        <button type="submit" class="badge badge-pill badge-danger">X</button>
                      </form>
                  </div>
                </div>
          </div>
        </div>
      </section>
  
@endsection