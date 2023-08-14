@extends('website.layouts.master')

@section('content')

      <div class="card">
        <div class="row d-flex justify-content-center">   
          <div class="col-md-6 ps-md-0">
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
              <form class="forms-sample" autocomplete="off" action="{{ route('website.showLogin') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="userEmail" class="form-label">Email</label>
                  <input type="email" name="email" class="form-control" id="userEmail" placeholder="Email">
                </div>
                <div class="mb-3">
                  <label for="userPassword" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="userPassword" placeholder="password" >
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-danger me-2 mb-2 mb-md-0">Sign in</button>
                </div>
                <a href="{{ route('website.register') }}" class="d-block mt-3 text-center text-muted">Not a user? Sign up</a>
              </form>
            </div>
          </div>
        </div>
     
@endsection
