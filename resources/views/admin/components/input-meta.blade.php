<div class="row">
  <div class="col-12">
    <div class="form-group">
      <label for="title">Meta Title:</label>
      <input type="text" class="form-control @error('meta_title') is-invalid @enderror" name="meta_title" value="{{ old('meta_title', ($data) ? $data->meta_title : '') }}">
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
    <textarea class="form-control @error('meta_description') is-invalid @enderror" rows="6" name="meta_description">{{ old('meta_description', ($data) ? $data->meta_description : '') }}</textarea>
    @if ($errors->has('meta_description'))
    <div class="invalid-feedback">
      {{ $errors->first('meta_description') }}
    </div>
    @endif
  </div>
</div>
