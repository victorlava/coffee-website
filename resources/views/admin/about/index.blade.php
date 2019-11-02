@extends('layouts.app')

@section('content')
<div class="container">
    <h1>About Page</h1>
    @if($about)
    <div class="row">
      <div class="col-md-12">
        <div class="card">
            <div class="card-header">Page Data</div>
            <div class="card-body">

              @if (session('message'))
                  <div class="alert alert-success">
                      {{ session('message') }}
                  </div>
              @endif

              <div class="row">
                <div class="col-12 mb-3">
                  <img src="{{ asset('storage/pages/about.jpg') }}" width="400" alt="image" class="img-thumbnail">
                </div>
                <div class="col-12">
                    <h1>{{ $about->title }}</h1>
                </div>
                <div class="col-12 mb-3">
                  <h4>{{ $about->sub_title }}</h4>
                </div>
                <div class="col-12">
                  {{ $about->description }}
                </div>
                <div class="col-12">
                  <a href="{{ $about->button_link }}" target="_blank" class="btn btn-secondary">{{ $about->button_text }}</a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-12">
          <div class="card">
              <div class="card-header">Meta Information</div>
              <div class="card-body">
                  <div class="col-12">
                      <p><strong>Meta Title:</strong> {{ $about->meta_title }}</p>
                  </div>
                  <div class="col-12 mb-3">
                    <p><strong>Meta Description:</strong> {{ $about->meta_description }}</p>
                  </div>
                </div>

            </div>

          </div>
      </div>
      @else
      <h4>Page is empty, fill the data.</h4>
      @endif
      <div class="row">
        <div class="col-12 mt-3">
          <a href="{{ route('admin.about.create') }}" class="btn btn-secondary btn-block btn-lg">Edit</a>
        </div>
      </div>
</div>

@endsection
