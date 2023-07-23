@extends('layouts.dashboardmain')
@section('dashboardcontent')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Detail Book</h1>
</div>

    <div class="card shadow mb-4">
        <div class="card-header ">
            <a href="{{ route('admin.books.index') }}" class="m-0 font-weight-bold btn btn-primary"><i class="bi bi-arrow-bar-left"></i> Back  </a>
        </div>
        <div class="card mt-5 ml-3" style="width: 18rem;">
            @if($book->cover)
            <img width="250px" height="300px" src="{{ asset("storage/" . $book->cover) }}" class="card-img-top" alt="CoverBook">
            @else
            <img width="250px" height="300px" src="{{ asset("assets/img/defaultcover.png") }}" class="card-img-top" alt="CoverBook Default">
            @endif
            <div class="card-body">
              <h5 class="card-title">Title : {{ $book->title }}</h5>
              <h6 class="card-subtitle mb-2 text-muted">Amount  : {{ $book->amount }}</h6>
              <p class="card-text">{!! $book->description !!}</p>
            </div>
          </div>
    </div>
@endsection
