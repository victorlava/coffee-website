@extends('layouts.app')

@section('content')
<form action="{{ route('admin.home.store') }}" method="post" enctype="multipart/form-data">
  <div class="container">
    <div class="row">
      <div class="col-12">
            @card(['header' => 'Home Page'])

              @csrf

              @alert
              @endalert

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

            @component('admin/components/input-page', [ 'data' => $home,
                                                        'image' => asset('storage/pages/home.jpg'),
                                                        'imageSize' => $imageSize])
            @endcomponent

            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <label for="button_text">Button Text:</label>
                  <input type="text" class="form-control @error('button_text') is-invalid @enderror" name="button_text" value="{{ old('button_text', ($home) ? $home->button_text : '') }}">
                  @if ($errors->has('button_text'))
                  <div class="invalid-feedback">
                    {{ $errors->first('button_text') }}
                  </div>
                  @endif
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="button_link">Button Link:</label>
                  <input type="text" class="form-control @error('button_link') is-invalid @enderror" name="button_link" value="{{ old('button_link', ($home) ? $home->button_link : '') }}">
                  @if ($errors->has('button_link'))
                  <div class="invalid-feedback">
                    {{ $errors->first('button_link') }}
                  </div>
                  @endif
                </div>
              </div>
            </div>
            
            @endcard
            </div>
        </div>
    <br>
    <div class="row">
      <div class="col-12">
          @card(['header' => "Meta Information"])
            @component('admin/components/input-meta', ['data' => $home])
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
