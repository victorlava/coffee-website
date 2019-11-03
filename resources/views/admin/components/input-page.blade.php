<div class="row">
  <div class="col-6">
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', ($data) ? $data->title : '') }}">
      @if ($errors->has('title'))
      <div class="invalid-feedback">
        {{ $errors->first('title') }}
      </div>
      @endif
    </div>
    <div class="form-group">
      <label for="sub_title">Sub-title:</label>
      <input type="text" class="form-control @error('sub_title') is-invalid @enderror" name="sub_title" value="{{ old('sub_title', ($data) ? $data->sub_title : '') }}">
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
    <img src="{{ $image }}" width="500" alt="image" class="img-thumbnail">
    <p class="mt-3">Image size is <strong>{{ $imageSize }} KB</strong></p>
    @else
    <p class="mt-3">No Image attached</p>
    @endif
  </div>
</div>

<div class="row">
  <div class="col-12">
    <label for="description">Description:</label>
    <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="6">{{ old('title', ($data) ? $data->title : '') }}</textarea>
    @if ($errors->has('description'))
    <div class="invalid-feedback">
      {{ $errors->first('description') }}
    </div>
    @endif
    <br>
  </div>
</div>
