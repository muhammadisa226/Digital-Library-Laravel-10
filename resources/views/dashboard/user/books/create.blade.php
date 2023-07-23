@extends('layouts.dashboardmain')
@section('dashboardcontent')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="h3 mb-0 text-gray-800">Add data Book</h1>
        </div>
                    <div class="card-body">
                            <div class="col-lg-8">
                                 <form action="{{ route('user.books.store') }}" method="post" enctype="multipart/form-data">
                                 @csrf
                                    <div class="form-group">
                                         <label for="title">Title</label>
                                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Title" autofocus value="{{ old('title') }}">
                                        <div class="invalid-feedback">
                                            @error('title')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="amount">Amount</label>
                                           <input type="text" name="amount" class="form-control @error('amount') is-invalid @enderror" id="amount" placeholder="Amount" autofocus value="{{ old('amount') }}">
                                           <div class="invalid-feedback">
                                               @error('amount')
                                                   {{ $message }}
                                               @enderror
                                           </div>
                                           </div>

                                     <div class="form-group">
                                          <label for="category">Category</label>
                                          <select class="custom-select" name="category_id">
                                            @foreach($categories as $category)
                                            @if(old('category_id') == $category->id)
                                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                            @else
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endif
                                            @endforeach
                                          </select>
                                             </div>
                                                <div class="form-group">
                                                 <label for="cover">Cover</label>
                                                <img class="img-preview img-fluid mb-3 col-sm-4">
                                                    <input type="file" class="form-control-file @error('cover') is-invalid @enderror" id="cover" name="cover" onchange="previewImage()">
                                                     <div class="invalid-feedback">
                                                          @error('cover')
                                                            {{ $message }}
                                                                @enderror
                                                         </div>
                                                         </div>
                                                <div class="form-group">
                                                 <label for="filebook">File Book pdf</label>
                                                    <input type="file" class="form-control-file @error('filebook') is-invalid @enderror" id="filebook" name="filebook" >
                                                     <div class="invalid-feedback">
                                                          @error('filebook')
                                                            {{ $message }}
                                                                @enderror
                                                         </div>
                                                         </div>
                                                         <div class="form-group">
                                                            <label for="description">Description</label>
                                                              <textarea class="form-control" id="description" rows="5"  name="description" id="description" ">{{ old('description') }}</textarea>
                                                                  @error('description')
                                                                 <p class="text-danger">{{ $message }}</p>
                                                              @enderror
                                                               </div>

                                                  <button type="submit" class="btn btn-primary">Add</button>
                                                  <a href="{{ route('user.books.index') }}" class="btn btn-success">Back</a>
                                            </form>
                            </div>
                        </div>

                </div>
<script>
    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })

    function previewImage() {
        const image = document.querySelector('#cover')
        const imgPreview =  document.querySelector('.img-preview')
        imgPreview.style.display = 'block';
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }
    }

</script>
@endsection
