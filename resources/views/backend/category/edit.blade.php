@extends('backend.layout.app2')

@section('style')
@endsection

@section('content')
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Edit User</h5>

      <!-- Vertical Form -->
      <form class="row g-3" action="" method="post">
        {{ csrf_field() }}
        <div class="col-12">
          <label for="inputNanme4" class="form-label">Name</label>
          <input type="text" name="name" value="{{ $record->name?? '' }}" required class="form-control" id="inputNanme4">
          <div style="color:red">{{ $errors->first('name') }}</div>
        </div>
        <div class="col-12">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="email" name="email" value="{{ $record->email }}" required class="form-control" id="inputEmail4">
          <div style="color:red">{{ $errors->first('email') }}</div>
        </div>
        <div class="col-12">
          <label for="inputPassword4" class="form-label">Password</label>
          <input type="text" name="password" class="form-control" id="inputPassword4">
          <p>If you want to change password, typen in the new password</p>
          <div style="color:red">{{ $errors->first('password') }}</div>
        </div>
        <div class="col-12">
            <label for="inputPassword4" class="form-label">Status</label>
            <select class="form-control" name="status" id="">
                <option {{ ($record->status == 1) ? 'selected' : ''}} value="1">Active</option>
                <option {{ ($record->status == 0) ? 'selected' : ''}} value="0">Inactive</option>
            </select>
          </div>
  
          <div class="col-12">
            <label for="inputPassword4" class="form-label">Menu</label>
            <select class="form-control" name="is_menu" id="">
                <option {{ ($record->is_menu == 1) ? 'selected' : ''}} value="1">Yes</option>
                <option {{ ($record->is_menu == 0) ? 'selected' : ''}} value="0">No</option>
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