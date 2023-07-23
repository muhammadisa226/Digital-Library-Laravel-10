@extends('layouts.dashboardmain')
@section('dashboardcontent')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">My Books</h1>
</div>


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('user.books.create') }}" class="m-0 font-weight-bold btn btn-primary">Add Data Book</a>
            <a href="{{ route('user.exportpdf') }}" class="m-0 font-weight-bold btn btn-danger"><i class="bi bi-filetype-pdf"></i> Export PDF</a>
            <a href="{{ route('user.exportexcel') }}" class="m-0 font-weight-bold btn btn-success"><i class="bi bi-file-earmark-spreadsheet"></i> Export Excel</a>
            @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
        </div>
        @endif
        </div>
        <div class="card-body">
            <div class="table-responsive ">
                <div class="col-lg-3 mb-3">
                    <form action="{{ route('user.books.index') }}">
                        <div class="form-row align-items-center ">
                          <div class="col-auto my-1">
                            <label class="mr-sm-2 " for="inlineFormCustomSelect">Filter By Category</label>
                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="category">
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                          </div>
                          <div class="col-auto my-1 d-inline">
                            <button type="submit" class="btn btn-primary ">Search</button>
                          </div>
                        </div>
                      </form>
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Amount</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($books as $book)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->category->name }}</td>
                            <td>{{ $book->amount }}</td>
                            <td>
                                <a href="{{ route('user.books.show', $book->id)  }}" class="btn btn-info"><span><i class="bi bi-eye-fill"></i> Detail</span></a>
                                <a href="{{ route('user.books.edit', $book->id)  }}" class="btn btn-warning"><span><i class="bi bi-pencil-square"></i> Edit</span></a>
                                <form action="{{ route('user.books.destroy', $book->id)  }}" method="post" class="d-inline">
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
