@extends('layouts.app')

@section('content')
<form action="{{ route('admin.about.store') }}" method="post" enctype="multipart/form-data">
  <div class="container">
    <div class="row">
      <div class="col-12">
        @card(['header' => 'About Page'])

          @csrf

          @alert
          @endalert

          @component('admin/components/input-page', [ 'data' => $about,
                                                      'image' => asset('storage/pages/about.jpg'),
                                                      'imageSize' => $imageSize])
          @endcomponent

        @endcard
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-12">
          @card(['header' => "Meta Information"])
            @component('admin/components/input-meta', ['data' => $about])
            @endcomponent
          @endcard
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
