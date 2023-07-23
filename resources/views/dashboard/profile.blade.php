@extends('layouts.dashboardmain')
@section('dashboardcontent')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">My Profile</h1>
</div>

    <div class="card shadow mb-4">
        <div class="card mt-5 ml-3" style="width: 18rem;">
            <img width="250px" height="300px" src="{{ asset("assets/img/undraw_profile.svg") }}" class="card-img-top" alt="undraw_profile.svg">
            <div class="card-body">
              <h5 class="card-title">{{ auth()->user()->name }}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{ auth()->user()->email }}</h6>
              <small class="text-muted">Role : {{ auth()->user()->role == 'admin' ? 'Admin' : 'User'   }}</small>
            </div>
          </div>
    </div>
@endsection
