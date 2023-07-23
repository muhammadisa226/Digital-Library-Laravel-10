@extends('layouts.dashboardmain')
@section('dashboardcontent')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Book Categories</h1>
</div>


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('categories.create') }}" class="m-0 font-weight-bold btn btn-primary">Add Category</a>
            @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
        </div>
        @endif
        </div>
        <div class="card-body">
            <div class="table-responsive ">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                <a href="{{ route('categories.edit',$category->id) }}" class="btn btn-warning"><span><i class="bi bi-pencil-square"></i> Edit</span></a>
                                <form action="{{ route('categories.destroy',$category->id) }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger" onclick="return confirm('Are You Sure ?')"><span><i class="bi bi-trash-fill"></i> Delete</span></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
