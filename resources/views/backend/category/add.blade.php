@extends('backend.layout.app2')

@section('style')
@endsection

@section('content')
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Add New Category</h5>

      <!-- Vertical Form -->
      <form class="row g-3" action="" method="post">
        {{ csrf_field() }}
        <div class="col-12">
          <label for="inputNanme4" class="form-label">Name</label>
          <input type="text" name="name" required class="form-control" value="{{ old('name') }}" id="inputNanme4">
          <div style="color:red;">{{ $errors->first('name') }}</div>
        </div>
        <div class="col-12">
          <label for="inputEmail4" class="form-label">Title</label>
          <input type="text" name="title" required class="form-control" value="{{ old('title') }}" id="inputEmail4">
          <div style="color:red;">{{ $errors->first('title') }}</div>
        </div>
        <div class="col-12">
          <label for="inputEmail4" class="form-label">Meta Title</label>
          <input type="text" name="meta_title" required class="form-control" value="{{ old('meta_title') }}" id="inputEmail4">
          <div style="color:red;">{{ $errors->first('meta_title') }}</div>
        </div>
        <div class="col-12">
          <label for="inputEmail4" class="form-label">Meta Description</label>
          <input type="text" name="meda_description" required class="form-control" value="{{ old('meta_description') }}" id="inputEmail4">
          <div style="color:red;">{{ $errors->first('meta_description') }}</div>
        </div>
        <div class="col-12">
          <label for="inputEmail4" class="form-label">Meta Keywords</label>
          <input type="text" name="meta_keywords" required class="form-control" value="{{ old('meta_keywords') }}" id="inputEmail4">
          <div style="color:red;">{{ $errors->first('meta_keywords') }}</div>
        </div>
        <div class="col-12">
            <label for="inputPassword4" class="form-label" >Status</label>
            <select class="form-control" name="status" id="">
                <option {{ old('status') == 1 ? 'selected' : ''}} value="1">Active</option>
                <option {{ old('status') == 0 ? 'selected' : ''}} value="0">Inactive</option>
            </select>
          </div>
          <div class="col-12">
            <label for="inputPassword4" class="form-label" >Menu</label>
            <select class="form-control" name="is_menu" id="">
                <option {{ old('is_menu') == 1 ? 'selected' : ''}} value="1">Yes</option>
                <option {{ old('is_menu') == 0 ? 'selected' : ''}} value="0">No</option>
            </select>
          </div>
  
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form><!-- Vertical Form -->

    </div>
  </div>
@endsection

@section('script')
@endsection