@extends('layouts.app')

@section('content')
<form action="{{ route('admin.home.store') }}" method="post">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="card">
            <div class="card-header">Home Page</div>
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
                          <label for="title">Title</label>
                          <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $home->title) }}">
                          @if ($errors->has('title'))
                          <div class="invalid-feedback">
                            {{ $errors->first('title') }}
                          </div>
                          @endif
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <label for="title">Sub-title</label>
                          <input type="text" class="form-control @error('sub_title') is-invalid @enderror" name="sub_title" value="{{ old('sub_title', $home->sub_title) }}">
                          @if ($errors->has('sub_title'))
                          <div class="invalid-feedback">
                            {{ $errors->first('sub_title') }}
                          </div>
                          @endif
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-12">
                        <input type="file" name="media_name" class="form-control">
                        <br>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-12">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="6">{{ old('title', $home->title) }}</textarea>
                        @if ($errors->has('description'))
                        <div class="invalid-feedback">
                          {{ $errors->first('description') }}
                        </div>
                        @endif
                        <br>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-6">
                        <div class="form-group">
                          <label for="button_text">Button Text</label>
                          <input type="text" class="form-control @error('button_text') is-invalid @enderror" name="button_text" value="{{ old('button_text', $home->button_text) }}">
                          @if ($errors->has('button_text'))
                          <div class="invalid-feedback">
                            {{ $errors->first('button_text') }}
                          </div>
                          @endif
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <label for="button_link">Button Link</label>
                          <input type="text" class="form-control @error('button_link') is-invalid @enderror" name="button_link" value="{{ old('button_link', $home->button_link) }}">
                          @if ($errors->has('button_link'))
                          <div class="invalid-feedback">
                            {{ $errors->first('button_link') }}
                          </div>
                          @endif
                        </div>
                      </div>
                    </div>

                  </div>

                </div>
            </div>
            <div class="col-3">
              <img src="/" width="200" alt="image" class="img-thumbnail">
            </div>
        </div>
    <br>
    <div class="row">
      <div class="col-md-9">
          <div class="card">
              <div class="card-header">Meta Information</div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <label for="title">Meta Title</label>
                      <input type="text" class="form-control @error('meta_title') is-invalid @enderror" name="meta_title" value="{{ old('meta_title', $home->meta_title) }}">
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
                    <label for="meta_description">Meta Description</label>
                    <textarea class="form-control @error('meta_description') is-invalid @enderror" rows="6" name="meta_description">{{ old('meta_description', $home->meta_description) }}</textarea>
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
        <div class="col-9 mt-3">
          <button type="submit" class="btn btn-success btn-block btn-lg">Save</button>
        </div>
      </div>
      </div>
  </div>
</div>
</form>
@endsection
