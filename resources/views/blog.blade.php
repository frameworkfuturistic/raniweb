@extends('layouts.app1')

@section('style')
@endsection

@section('contents')
   <!-- Header Start -->
   <div class="mb-5 container-fluid bg-primary">
      <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
         <h3 class="text-white display-3 font-weight-bold">
            @if(!empty($header_title))
               {{ $header_title}}
            @else
                Rani Hospital Blogs
            @endif
         </h3>
      </div>
   </div>
   <!-- Header End -->

   <!-- Blog Start -->
   <div class="pt-5 container-fluid">
      <div class="container">

         {{-- Blogs --}}
         <div class="pb-3 row">
            @foreach($param_record as $value)

            <div class="mb-4 col-lg-4">
               <div class="mb-2 border-0 shadow-sm card">
                  <img class="mb-2 card-img-top" src="{{ $value->getImage()}}" alt="" style="height:233px; width:100%; object-fit:cover;"/>
                  <div class="p-4 text-center card-body bg-light">
                     <a href="{{ url($value->slug) }}">
                        <h4 class="">
                           {!! strip_tags(Str::substr($value->title, 0, 40)) !!}
                        </h4>
                     </a>
                     <div class="mb-3 d-flex justify-content-center">
                        <small class="mr-3"> <i class="fa fa-user text-primary"></i> {{ $value->user_name}}</small>
                        <small class="mr-3"> <a href="{{ url($value->category_slug) }} "> <i class="fa fa-folder text-primary"></i> {{ $value->category_name}} </a></small>
                        <small class="mr-3"><i class="fa fa-comments text-primary"></i> 0</small>
                     </div>
                     <p>
                        {!! strip_tags(Str::substr($value->description, 0, 170)) !!} ...
                     </p>
                     <a href="{{ url($value->slug) }}" class="px-4 mx-auto my-2 btn btn-primary">Read More</a>
                  </div>
               </div>
            </div>

            @endforeach

            {{-- Pagination --}}
            <div class="mb-4 col-md-12">
               {!! $param_record->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
            </div>

         </div>
      </div>
   </div>
   <!-- Blog End -->
@endsection

@section('script')
@endsection
