@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Home Page</h1>

    @if($home)
    <div class="row">
      <div class="col-md-12">
          @card(['header' => "Page Data"])

            @alert
            @endalert

            <div class="row">
              @infopage(['title' => $home->title,
                         'sub_title' => $home->sub_title,
                         'description' => $home->description,
                         'image' => asset('storage/pages/home.jpg')])
              @endinfopage
              <div class="col-12">
                <a href="{{ $home->button_link }}" target="_blank" class="btn btn-secondary">{{ $home->button_text }}</a>
              </div>
            </div>
          @endcard
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-12">
          @infometa([ 'title' => $home->meta_title,
                      'description' => $home->meta_description])
          @endinfometa
          </div>
      </div>
      @else
      <h4>Page is empty, fill the data.</h4>
      @endif
      <div class="row">
        <div class="col-12 mt-3">
          <a href="{{ route('admin.home.create') }}" class="btn btn-secondary btn-block btn-lg">Edit</a>
        </div>
      </div>
</div>

@endsection
