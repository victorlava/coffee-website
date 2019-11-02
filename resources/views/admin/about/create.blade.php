@extends('layouts.app')

@section('content')
<form action="{{ route('admin.about.store') }}" method="post" enctype="multipart/form-data">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card">
            <div class="card-header">About Page</div>
            <div class="card-body">

                    @csrf

                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif

                    {{--
                      @if ($errors->any())
                          <div class="alert alert-danger">
                              <ul>
                                  @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                          </div>
                      @endif
                    --}}

                    <div class="row">
                      <div class="col-6">
                        <div class="form-group">
                          <label for="title">Title:</label>
                          <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', ($about) ? $about->title : '') }}">
                          @if ($errors->has('title'))
                          <div class="invalid-feedback">
                            {{ $errors->first('title') }}
                          </div>
                          @endif
                        </div>
                        <div class="form-group">
                          <label for="sub_title">Sub-title:</label>
                          <input type="text" class="form-control @error('sub_title') is-invalid @enderror" name="sub_title" value="{{ old('sub_title', ($about) ? $about->sub_title : '') }}">
                          @if ($errors->has('sub_title'))
                          <div class="invalid-feedback">
                            {{ $errors->first('sub_title') }}
                          </div>
                          @endif
                        </div>
                        <div class="form-group">
                          <label for="image">Image:</label>
                          <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                          <p class="mt-3">The dimensions of the image should be atleast <strong>300x300</strong>. The maximum allowed size is <strong>512 KB</strong>.</p>
                          @if ($errors->has('image'))
                          <div class="invalid-feedback">
                            {{ $errors->first('image') }}
                          </div>
                          @endif
                        </div>
                      </div>
                      <div class="col-6">
                        @if($imageSize != 0)
                        <img src="{{ asset('storage/pages/about.jpg') }}" width="500" alt="image" class="img-thumbnail">
                        <p class="mt-3">Image size is <strong>{{ $imageSize }} KB</strong></p>
                        @else
                        <p class="mt-3">No Image attached</p>
                        @endif
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-12">
                        <label for="description">Description:</label>
                        <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="6">{{ old('title', ($about) ? $about->title : '') }}</textarea>
                        @if ($errors->has('description'))
                        <div class="invalid-feedback">
                          {{ $errors->first('description') }}
                        </div>
                        @endif
                        <br>
                      </div>
                    </div>
                  </div>

                </div>
            </div>
        </div>
    <br>
    <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-header">Meta Information</div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <label for="title">Meta Title:</label>
                      <input type="text" class="form-control @error('meta_title') is-invalid @enderror" name="meta_title" value="{{ old('meta_title', ($about) ? $about->meta_title : '') }}">
                      @if ($errors->has('meta_title'))
                      <div class="invalid-feedback">
                        {{ $errors->first('meta_title') }}
                      </div>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-12">
                    <label for="meta_description">Meta Description:</label>
                    <textarea class="form-control @error('meta_description') is-invalid @enderror" rows="6" name="meta_description">{{ old('meta_description', ($about) ? $about->meta_description : '') }}</textarea>
                    @if ($errors->has('meta_description'))
                    <div class="invalid-feedback">
                      {{ $errors->first('meta_description') }}
                    </div>
                    @endif
                  </div>
                </div>
              </div>
            </div>
         </div>
        </div>
      <div class="row">
        <div class="col-12 mt-3">
          <button type="submit" class="btn btn-success btn-block btn-lg">Save</button>
        </div>
      </div>
      </div>
  </div>
</div>
</form>
@endsection
