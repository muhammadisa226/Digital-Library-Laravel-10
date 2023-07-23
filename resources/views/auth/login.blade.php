@extends('layouts.authmain')
@section('authcontent')
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-7">
                <div class="card o-hidden border-0 shadow-lg my-5">

                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->

                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Digital Library <i class="fas fa-solid fa-book-open"></i></h1>
                                        <h2 class="h4 text-gray-900 mb-4">Login Form ! </h2>
                                        @if($message = Session::get('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ $message }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                                        </div>
                                        @endif
                                        @if($message = Session::get('loginerror'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $message }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                                        </div>
                                        @endif

                                    </div>
                                    <form class="user" action="/login" method="post">
                                    @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user @error('email') is-invalid @enderror"
                                                id="email" name="email"
                                                placeholder="Your Email Address..." value="{{ old('email')  }}" autofocus required>
                                                @error('email')
                                                     <div class="invalid-feedback">
                                                         {{ $message }}
                                                      </div>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" id="password" placeholder="Your Password..." required>
                                                @error('password')
                                                     <div class="invalid-feedback">
                                                         {{ $message }}
                                                      </div>
                                                @enderror
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="/register">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection
