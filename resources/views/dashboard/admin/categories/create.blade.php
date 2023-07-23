@extends('layouts.dashboardmain')
@section('dashboardcontent')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="h3 mb-0 text-gray-800">Add Category</h1>
        </div>
                    <div class="card-body">
                            <div class="col-lg-8">
                                 <form action="{{ route('categories.store') }}" method="post">
                                 @csrf
                                    <div class="form-group">
                                         <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name Category ..." autofocus value="{{ old('name') }}">
                                        <div class="invalid-feedback">
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                        </div>

                                                  <button type="submit" class="btn btn-primary">Add</button>
                                                  <a href="{{ route('categories.index') }}" class="btn btn-success">Back</a>
                                            </form>
                            </div>
                        </div>

                </div>
@endsection
