@extends('website.layouts.master')

@section('content')


      <div class="card">
        <div class="row d-flex justify-content-center">
          <div class="col-md-9 ps-md-0">
            <div class="auth-form-wrapper px-4 py-5">
                <a href=""><img src="{{ asset('assets/images/logo.png') }}" alt="#"></a>
                    @if (session()->has('success'))
                        <div class="alert alert-info alert-dismissible" id="alert" role="alert">
                            {{ session()->get('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                        </div>
                    @elseif (session()->has('error'))
                        <div class="alert alert-danger  alert-dismissible" id="alert" role="alert">
                            {{ session()->get('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                        </div>
                    @endif
              <form class="forms-sample row d-flex justify-content-center" action="{{ route('website.register_user') }}" method="POST">
                @csrf
                <div class="mb-3 col-md-6">
                  <label for="exampleInputUsername1" class="form-label">Username</label>
                  <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="exampleInputUsername1" autocomplete="Username" placeholder="username">
                </div>
                <div class="mb-3 col-md-6">
                  <label for="userEmail" class="form-label">Email</label>
                  <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="userEmail" placeholder="email">
                </div>
                <div class="mb-3 col-md-6">
                  <label for="userPassword" class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" id="userPassword" autocomplete="current-password" placeholder="password">
                </div>
                <div class="mb-3 col-md-6">
                  <label for="userPassword" class="form-label">Password Confirm</label>
                  <input type="password" class="form-control" name="confirm_password" id="userPassword" autocomplete="current-password" placeholder="confirm">
                </div>
               
                <div class="text-center col-md-12">
                  <button type="submit" class="btn btn-danger me-2 mb-2 mb-md-0">Sign up</button>  
                </div>
                
                <a href="{{ route('website.showLogin') }}" class="d-block mt-3 text-center text-muted">Already a user? Sign in</a>
              </form>
            </div>
          </div>
        </div>
      </div>
@endsection