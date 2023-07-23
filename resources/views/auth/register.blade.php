@extends('layouts.authmain')
@section('authcontent')
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Digital Library <i class="fas fa-solid fa-book-open"></i></h1>
                                <h2 class="h4 text-gray-900 mb-4">Register Form !</h2>
                            </div>
                            <form class="user" action="/register" method="post">
                            @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" id="name"
                                        placeholder="Your Name..."  value="{{ old('name') }}" required>
                                        @error('name')
                                        <div class="invalid-feedback">
                                         {{ $message }}
                                         </div>
                                        @enderror
                                         </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user @error('email') is-invalid @enderror" id="email" name="email"
                                        placeholder="Your Email Address..."  value="{{ old('email') }}" required>
                                          @error('email')
                                        <div class="invalid-feedback">
                                         {{ $message }}
                                         </div>
                                        @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" id="password" name="password"
                                        placeholder="Your Password..." required>
                                          @error('password')
                                        <div class="invalid-feedback">
                                         {{ $message }}
                                         </div>
                                        @enderror
                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register
                                </button>
                                <hr>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="/">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @endsection
