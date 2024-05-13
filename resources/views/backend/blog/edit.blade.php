@extends('backend.layout.app2')

@section('style')
   <link rel="stylesheet" href="{{ url('assets/tagsinput/bootstrap-tagsinput.css') }}">
@endsection


@section('content')
   <div class="card">
      <div class="card-body">
         <h5 class="card-title">Edit Blog</h5>
         <!-- Vertical Form -->
         <form class="row g-3" action="" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            {{-- Title --}}
            <div class="col-12">
               <label for="inputEmail4" class="form-label">Title *</label>
               <input type="text" name="title" required class="form-control" value="{{ $param_record->title }}">
            </div>

            {{-- Category --}}
            <div class="col-12">
               <label for="category_id" class="form-label">Category *</label>
               <select class="form-control" name="category_id" required>
                  <option value="">Select Category</option>
                  @foreach ($param_category as $item)
                     <option {{ ($param_record->category_id == $item->id) ? 'selected' : ''}} value="{{ $item->id }}">{{ $item->name}}</option>
                  @endforeach
               </select>
            </div>

            {{-- Image --}}
            <div class="col-12">
               <label for="inputEmail4" class="form-label">Image *</label>
               <input type="file" name="image_file" class="form-control">
               @if(!empty($param_record->getImage()))
                  <img src="{{ $param_record->getImage() }}" style="height: 100px; width: 100px" alt="image">
               @endif
            </div>

            {{-- Description --}}
            <div class="col-12">
               <label for="inputEmail4" class="form-label" required>Description *</label>
               <textarea name="description" class="form-control tinymce-editor"  cols="30" rows="10">{{ $param_record->description }}</textarea>
            </div>

            {{-- Tags --}}
            <div class="col-12">
               @php
                  $tags='';
                  foreach($param_record->getTags as $value){
                     $tags .= $value->tag.',';
                  }    
               @endphp

               <label for="inputEmail4" class="form-label">Tags *</label>
               <input type="text" name="tags" value="{{ $tags }}" required class="form-control" id="tags">
            </div>

            {{-- Meta Description --}}
            <div class="col-12">
               <label for="meta_description" class="form-label">Meta Description</label>
               <textarea name="meta_description" class="form-control">{{ $param_record->meta_description }}</textarea>
               <div style="color:red;">{{ $errors->first('meta_description') }}</div>
             </div>

             {{-- Meta Keywords --}}
             <div class="col-12">
               <label for="inputEmail4" class="form-label">Meta Keywords</label>
               <input type="text" name="meta_keywords" required class="form-control" value="{{ $param_record->meta_keywords }}">
               <div style="color:red;">{{ $errors->first('meta_keywords') }}</div>
             </div>

           {{-- Status --}}
            <div class="col-12">
               <label for="inputPassword4" class="form-label">Status</label>
               <select class="form-control" name="status" id="">
                  <option {{ $param_record->status == 1 ? 'selected' : '' }} value="1">Active</option>
                  <option {{ $param_record->status == 0 ? 'selected' : '' }} value="0">Inactive</option>
               </select>
            </div>

            {{-- Publish --}}
            <div class="col-12">
               <label for="inputPassword4" class="form-label">Publish</label>
               <select class="form-control" name="is_published">
                  <option {{ $param_record->is_published == 1 ? 'selected' : '' }} value="1">Yes</option>
                  <option {{ $param_record->is_published == 0 ? 'selected' : '' }} value="0">No</option>
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
