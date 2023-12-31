@extends('backend.master')

@section('content')

<main>
        <div class="mt-4 mx-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-decoration-none text-dark" href="{{ ('/home') }}">Admin panel</a></li>
                <li class="breadcrumb-item active" aria-current="page">Settings</li>
            </ol>
        </div><!-- End .container -->

            <div class="container">
              <div class="row">
                <div class="col-lg-4">
                  <div class="card mb-4">
                    <div class="card-body text-center">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                        class="rounded-circle img-fluid border border-secondary" style="width: 150px;">
                      <h5 class="my-3">{{ auth()->user()->name }}</h5>
                      <p class="text-muted mb-1">Full Stack Developer</p>
                      <p class="text-muted">Bay Area, San Francisco, CA</p>
                    </div>
                    <div class="mb-4 mb-lg-0">
                        <div class="card-body p-0">
                            <ul class="list-group list-group-flush rounded-3">
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                                    <p class="mb-0">search4asraful</p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                                    <p class="mb-0">@search4asraful</p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                                    <p class="mb-0">flc_asraful</p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                                    <p class="mb-0">search4asraful</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-8">
                  <div class="card mb-4">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Full Name</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted mb-0">{{ auth()->user()->name }}</p>
                        </div>
                      </div>
                      <hr/>
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Email</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted mb-0">{{ auth()->user()->email }}</p>
                        </div>
                      </div>
                      <hr/>
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Phone</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted mb-0">(097) 234-5678</p>
                        </div>
                      </div>
                      <hr/>
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Address</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
</main><!-- End .main -->

@endsection