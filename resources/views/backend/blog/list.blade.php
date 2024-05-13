@extends('backend.layout.app2')

@section('style')
@endsection


@section('content')
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          @include('layouts/_messages')
          <div class="card-body">
            <h5 class="card-title">Blog List (Total: {{ $param_record->total() }})</h5>
            <a href="{{ url('/panel/blog/add') }}" class="btn btn-primary" style="float:right; margin-top:-51px;">Add New</a>

            <!-- ID -->
            <form class="row" method="get">
               {{-- ID --}}
               <div class="col-md-1" style="margin-bottom: 10px">
                  <label class="form-label">ID</label>
                  <input type="text" value="{{ Request::get('id') }}" class="form-control" name="id">
               </div>

               {{-- Username --}}
               <div class="col-md-2" style="margin-bottom: 10px">
                  <label class="form-label">User Name</label>
                  <input type="text" value="{{ Request::get('username') }}" class="form-control" name="username">
               </div>

               {{-- Title --}}
               <div class="col-md-4" style="margin-bottom: 10px">
                  <label class="form-label">Title</label>
                  <input type="text" class="form-control" name="title" value="{{ Request::get('title') }}">
               </div>

               {{-- Category --}}
               <div class="col-md-3" style="margin-bottom: 10px">
                  <label class="form-label">Category</label>
                  <input type="text" class="form-control" name="category" value="{{ Request::get('category') }}">
               </div>

               {{-- Published --}}
               <div class="col-md-1" style="margin-bottom: 10px">
                  <label class="form-label">Published</label>
                  <select class="form-control" name="is_published">
                     <option value="">Select</option>
                     <option  {{ (Request::get('is_published') == 1) ? 'selected' : '' }} value="1">Yes</option>
                     <option  {{ (Request::get('is_published') == 100) ? 'selected' : '' }}  value="100">No</option>
                  </select>
               </div>

               {{-- Status --}}
               <div class="col-md-1" style="margin-bottom: 10px">
                  <label class="form-label">Status</label>
                  <select class="form-control" name="status">
                     <option value="">Select</option>
                     <option  {{ (Request::get('status') == 1) ? 'selected' : '' }}  value="1">Yes</option>
                     <option  {{ (Request::get('status') == 100) ? 'selected' : '' }}  value="100">No</option>
                  </select>
               </div>

               {{-- Start Date --}}
               <div class="col-md-2" style="margin-bottom: 10px">
                  <label class="form-label">Start date</label>
                  <input type="date" value="{{ Request::get('start_date') }}" class="form-control" name="start_date">
               </div>

               {{-- End Date --}}
               <div class="col-md-2" style="margin-bottom: 10px">
                  <label class="form-label">End date</label>
                  <input type="date" value="{{ Request::get('end_date') }}" class="form-control" name="end_date">
               </div>

               <div class="col-md-2" style="margin-bottom: 10px">
                  <label class="form-label" style="display: block;">&nbsp;</label>
                  <button type="submit" class="btn btn-primary">Search</button>
                  <a href="{{ url('panel/blog/list') }}" class="btn btn-secondary">Reset</a>
               </div>
            </form><!-- Vertical Form -->

            <hr />

            <!-- Default Table -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Image</th>
                  <th scope="col">User Name</th>
                  <th scope="col">Title</th>
                  <th scope="col">Category</th>
                  <th scope="col">Status</th>
                  <th scope="col">Published</th>
                  <th scope="col">Created On</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
               @forelse($param_record as $record)
                    <tr>
                        <th type="text" scope="row">{{ $record->id }}</th>
                        <td>
                           @if(!empty($record->getImage()))
                              <img src="{{ $record->getImage() }}" style="height: 100px; width: 100px" alt="image">
                           @endif
                       </td>

                        {{-- <td>{{ $record->getImage() }}</td> --}}
                        <td>{{ $record->user_name }}</td>
                        <td>{{ $record->title }}</td>
                        <td>{{ $record->category_name }}</td>
                        <td>{{ !empty($record->status) ? 'Active' : 'Inactive'}}</td>
                        <td>{{ !empty($record->is_published) ? 'Published' : 'Not Published'}}</td>
                        <td>{{ date('d-m-Y H:i A', strtotime($record->created_at)) }}</td>
                        <td>
                            <a href="{{ url('panel/blog/edit/'.$record->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <a onclick="return confirm('Sure to Delete?')" href="{{ url('panel/blog/delete/'.$record->id) }}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="100%">Records not found</td>
                    </tr>
                @endforelse
              </tbody>
              {!! $param_record->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
            </table>
            <!-- End Default Table Example -->
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('script')
@endsection
