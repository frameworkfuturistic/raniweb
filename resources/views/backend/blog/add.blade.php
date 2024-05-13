@extends('backend.layout.app2')

@section('style')
<link rel="stylesheet" href="{{ url('assets/tagsinput/bootstrap-tagsinput.css')}}">
@endsection

@section('content')
   <div class="card">
      <div class="card-body">
         <h5 class="card-title">Add New Blog</h5>
         <!-- Vertical Form -->
         <form class="row g-3" action="" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            {{-- Title --}}
            <div class="col-12">
               <label for="inputEmail4" class="form-label">Title *</label>
               <input type="text" name="title" required class="form-control">
            </div>

            {{-- Category --}}
            <div class="col-12">
               <label for="category_id" class="form-label">Category *</label>
               <select class="form-control" name="category_id">
                  <option value="">Select Category</option>
                  @foreach ($param_categories as $item)
                     <option value="{{ $item->id }}">{{ $item->name}}</option>
                  @endforeach
               </select>
            </div>

            {{-- Image --}}
            <div class="col-12">
               <label for="inputEmail4" class="form-label" required>Image *</label>
               <input type="file" name="image_file" required class="form-control">
            </div>

            {{-- Description --}}
            <div class="col-12">
               <label for="inputEmail4" class="form-label" required>Description *</label>
               <textarea name="description" class="form-control tinymce-editor"  cols="30" rows="10"></textarea>
            </div>

            {{-- Tags --}}
            <div class="col-12">
               <label for="inputEmail4" class="form-label">Tags *</label>
               <input type="text" name="tags" required class="form-control"  id="tags"/>
            </div>

            {{-- Publish --}}
            <div class="col-12">
               <label for="inputPassword4" class="form-label">Publish</label>
               <select class="form-control" name="is_published">
                  <option value="1">Yes</option>
                  <option value="0">No</option>
               </select>
            </div>

            {{-- Meta Description --}}
            <div class="col-12">
               <label for="inputEmail4" class="form-label">Meta Description</label>
               <input type="text" name="meda_description" required class="form-control" value="{{ old('meta_description') }}" id="inputEmail4">
               <div style="color:red;">{{ $errors->first('meta_description') }}</div>
             </div>

             {{-- Meta Keywords --}}
             <div class="col-12">
               <label for="inputEmail4" class="form-label">Meta Keywords</label>
               <input type="text" name="meta_keywords" required class="form-control" value="{{ old('meta_keywords') }}" id="inputEmail4">
               <div style="color:red;">{{ $errors->first('meta_keywords') }}</div>
             </div>

           {{-- Status --}}
            <div class="col-12">
               <label for="inputPassword4" class="form-label">Status</label>
               <select class="form-control" name="status" id="">
                  <option {{ old('status') == 1 ? 'selected' : '' }} value="1">Active</option>
                  <option {{ old('status') == 0 ? 'selected' : '' }} value="0">Inactive</option>
               </select>
            </div>

            <div class="col-12">
               <button type="submit" class="btn btn-primary" style="margin-top: 20px">Submit</button>
            </div>
         </form><!-- Vertical Form -->

      </div>
   </div>
@endsection

@section('script')
   <script src="{{ url('assets/tagsinput/bootstrap-tagsinput.js')}}"></script>
   <script>
      $("#tags").tagsinput()
   </script>
@endsection
