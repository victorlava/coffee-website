@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
            <div class="card-header">Home Page</div>
            <div class="card-body">

              @if (session('message'))
                  <div class="alert alert-success">
                      {{ session('message') }}
                  </div>
              @endif

              <div class="row">
                <div class="col-12 mb-3">
                  <img src="{{ asset('storage/pages/home.jpg') }}" width="400" alt="image" class="img-thumbnail">
                </div>
                <div class="col-12">
                    <h1>{{ $home->title }}</h1>
                </div>
                <div class="col-12 mb-3">
                  <h4>{{ $home->sub_title }}</h4>
                </div>
                <div class="col-12">
                  {{ $home->description }}
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
                      <p><strong>Meta Title:</strong> {{ $home->meta_title }}</p>
                  </div>
                  <div class="col-12 mb-3">
                    <p><strong>Meta Description:</strong> {{ $home->meta_description }}</p>
                  </div>
                </div>

            </div>

          </div>
      </div>
      <div class="row">
        <div class="col-12 mt-3">
          <a href="{{ route('admin.home.create') }}" class="btn btn-secondary btn-block btn-lg">Edit</a>
        </div>
      </div>
</div>

@endsection
