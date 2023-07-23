@extends('layouts.dashboardmain')
@section('dashboardcontent')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="h3 mb-0 text-gray-800">Edit Category</h1>
        </div>
                    <div class="card-body">
                            <div class="col-lg-8">
                                 <form action="{{ route('categories.update', $category->id) }}}}" method="post">
                                @method('put')
                                 @csrf
                                    <div class="form-group">
                                         <label for="name">name</label>
                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name" autofocus value="{{ old('name', $category->name) }}">
                                        <div class="invalid-feedback">
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                        </div>
                                                  <button type="submit" class="btn btn-primary">Update</button>
                                                  <a href="{{ route('categories.index') }}" class="btn btn-success">Back</a>
                                            </form>
                            </div>
                        </div>

                </div>
    </div>
@endsection
