@extends('layouts.app')

@section('content')
<div class="container">
    <h1>About Page</h1>

    @if($about)
    <div class="row">
      <div class="col-md-12">
        @card(['header' => "Page Data"])

          @alert
          @endalert

          <div class="row">
            @infopage(['title' => $about->title,
                       'sub_title' => $about->sub_title,
                       'description' => $about->description,
                       'image' => asset('storage/pages/about.jpg')])
            @endinfopage
          </div>

        @endcard
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-12">
          @infometa([ 'title' => $about->meta_title,
                      'description' => $about->meta_description])
          @endinfometa
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
