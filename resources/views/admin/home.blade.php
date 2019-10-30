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
                          <input type="text" class="form-control" name="title">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <label for="title">Sub-title</label>
                          <input type="text" class="form-control" name="sub_title">
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
                        <textarea name="description" class="form-control" rows="6" name="text"></textarea>
                        <br>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-6">
                        <div class="form-group">
                          <label for="button_text">Button Text</label>
                          <input type="text" class="form-control" name="button_text">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <label for="button_link">Button Link</label>
                          <input type="text" class="form-control" name="button_link">
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
                      <input type="text" class="form-control" name="meta_title">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-12">
                    <label for="description">Meta Description</label>
                    <textarea class="form-control" rows="6" name="meta_description"></textarea>
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
