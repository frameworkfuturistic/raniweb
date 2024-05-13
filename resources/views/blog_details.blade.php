@extends('layouts.app1')

@section('style')
@endsection

@section('contents')
   <!-- Detail Start -->
   <div class="container py-5">
      <div class="row">
         <div class="col-lg-8">
            @include('layouts._messages')
            <div class="mb-3 text-left d-flex flex-column">
               <h1 class="mb-3">{{ $param_record->slug }}</h1>
               <div class="d-flex">
                  <p class="mr-3"><i class="fa fa-user text-primary"></i> {{ $param_record->user_name }}</p>
                  <p class="mr-3">
                     <a href="{{ url($param_record->category_slug) }}"><i class="fa fa-folder text-primary"></i> {{ $param_record->category_name }}</a>
                  </p>
                  <p class="mr-3"><i class="fa fa-comments text-primary"></i> {{ $param_record->getCommentCount() }}</p>
               </div>
            </div>
            <div class="mb-5">
               @if(!empty($param_record->getImage()))
                  <img class="mb-4 rounded img-fluid w-100" src="{{ $param_record->getImage() }}" alt="Image" style="max-height: 574px; object-fit:cover" />
               @endif
               <p>
                  {!! $param_record->description !!}
               </p>
            </div>

            <!-- Related Post -->
            @if(!empty($param_relatedposts))
            <div class="mb-5 mx-n3">
               <h2 class="mb-4 ml-3">Related Post</h2>
               <div class="owl-carousel post-carousel position-relative">
                  @foreach($param_relatedposts as $item)
                  <div class="mx-3 overflow-hidden rounded shadow-sm d-flex align-items-center bg-light">
                     <img class="img-fluid" src="{{ $item->getImage() }}" style="width: 80px; height: 80px; object-fit:cover" />
                     <div class="pl-3">
                        <a href="{{ url($item->slug) }}"><h5 class="">{!! strip_tags(Str::substr($item->title, 0, 22)) !!}</h5></a>
                        <div class="d-flex">
                           <small class="mr-3"><i class="fa fa-user text-primary"></i> {{ $item->user_name }}</small>
                           <small class="mr-3">
                              <a href="{{ url($item->category_slug) }}"><i class="fa fa-folder text-primary"></i> {{ $item->category_name }}</a>
                           </small>
                           <small class="mr-3"><i class="fa fa-comments text-primary"></i>  {{ $item->getCommentCount() }}</small>
                        </div>
                     </div>
                  </div>
                  @endforeach
               </div>
            </div>
            @endif

            <!-- Comment List -->
            <div class="mb-5">
               <h2 class="mb-4">{{ $param_record->getComments->count() }} Comments</h2>
               @foreach($param_record->getComments as $item)
               <div class="mb-4 media">
                  <img src="frontend/img/user.jpg" alt="Image" class="mt-1 mr-3 img-fluid rounded-circle" style="width: 45px" />
                  <div class="media-body">
                     <h6>
                        {{ $item->user->name }} <small><i>{{ date('d M Y', strtotime($item->created_at))}} at {{ date('h:i A', strtotime($item->created_at))}}</i></small>
                     </h6>
                     <p>
                        {{ $item->comment }}
                     </p>
                     <button class="btn btn-sm btn-light trigger-showreply" id="{{ $item->id }}">Reply</button>


                     @foreach($item->getReply as $item1)
                     <div class="mt-4 media">
                        <img src="frontend/img/user.jpg" alt="Image" class="mt-1 mr-3 img-fluid rounded-circle"
                           style="width: 45px" />
                        <div class="media-body">
                           <h6>
                              {{ $item->user->name }} <small><i>{{ date('d M Y', strtotime($item->created_at))}} at {{ date('h:i A', strtotime($item->created_at))}}</i></small>
                           </h6>
                           <p>
                              {{ $item1->comment }}
                           </p>
                        </div>
                     </div>
                     @endforeach
                     



                     <div class="bg-light p-3 showreply{{$item->id}}" style="display: none;">
                        <h2 class="mb-4">Reply to the comment</h2>
                        <form method="POST" action="{{ url('blog-comment-reply-submit')}}">
                           {{ csrf_field() }}
                           <input type="hidden" name="comment_id" value="{{ $item->id}}">
                           <div class="form-group">
                              <label for="comment">Reply *</label>
                              <textarea name="comment" required cols="30" rows="5" class="form-control"></textarea>
                           </div>
                           <div class="mb-0 form-group">
                              <input type="submit" value="Leave Reply" class="px-3 btn btn-primary" />
                           </div>
                        </form>
                     </div>
                     
                     
                  </div>
               </div>
               @endforeach
               
               
               {{-- <div class="mb-4 media">
                  <img src="frontend/img/user.jpg" alt="Image" class="mt-1 mr-3 img-fluid rounded-circle" style="width: 45px" />
                  <div class="media-body">
                     <h6>
                        John Doe <small><i>01 Jan 2045 at 12:00pm</i></small>
                     </h6>
                     <p>
                        Diam amet duo labore stet elitr ea clita ipsum, tempor labore
                        accusam ipsum et no at. Kasd diam tempor rebum magna dolores
                        sed sed eirmod ipsum. Gubergren clita aliquyam consetetur
                        sadipscing, at tempor amet ipsum diam tempor consetetur at
                        sit.
                     </p>
                     <button class="btn btn-sm btn-light">Reply</button>
                     <div class="mt-4 media">
                        <img src="frontend/img/user.jpg" alt="Image" class="mt-1 mr-3 img-fluid rounded-circle"
                           style="width: 45px" />
                        <div class="media-body">
                           <h6>
                              John Doe <small><i>01 Jan 2045 at 12:00pm</i></small>
                           </h6>
                           <p>
                              Diam amet duo labore stet elitr ea clita ipsum, tempor
                              labore accusam ipsum et no at. Kasd diam tempor rebum
                              magna dolores sed sed eirmod ipsum. Gubergren clita
                              aliquyam consetetur, at tempor amet ipsum diam tempor at
                              sit.
                           </p>
                           <button class="btn btn-sm btn-light">Reply</button>
                        </div>
                     </div>
                  </div>
               </div> --}}
               
            </div>

            <!-- Comment Form -->
            <div class="p-5 bg-light">
               <h2 class="mb-4">Leave a comment</h2>
               <form method="POST" action="{{ url('blog-comment-submit')}}">
                  {{ csrf_field() }}
                  <input type="hidden" name="blog_id" value="{{ $param_record->id}}">
                  <div class="form-group">
                     <label for="comment">Comment *</label>
                     <textarea name="comment" required cols="30" rows="5" class="form-control"></textarea>
                  </div>
                  <div class="mb-0 form-group">
                     <input type="submit" value="Leave Comment" class="px-3 btn btn-primary" />
                  </div>
               </form>
            </div>
         </div>

         <div class="mt-5 col-lg-4 mt-lg-0">
            {{-- <!-- Author Bio -->
            <div class="px-4 py-5 mb-5 text-center rounded d-flex flex-column bg-primary">
               <img src="frontend/img/user.jpg" class="mx-auto mb-3 img-fluid rounded-circle" style="width: 100px" />
               <h3 class="mb-3 text-secondary">John Doe</h3>
               <p class="m-0 text-white">
                  Conset elitr erat vero dolor ipsum et diam, eos dolor lorem ipsum,
                  ipsum ipsum sit no ut est. Guber ea ipsum erat kasd amet est elitr
                  ea sit.
               </p>
            </div> --}}

            <!-- Search Form -->
            <div class="mb-5">
               <form action="{{ url('blog') }}" method="get">
                  <div class="input-group">
                     <input name="q" type="text" class="form-control form-control-lg" required placeholder="Keyword" />
                     <div class="input-group-append">
                        <button class="bg-transparent input-group-text text-primary"><i class="fa fa-search"></i></button>
                     </div>
                  </div>
               </form>
            </div>

            <!-- Category List -->
            <div class="mb-5">
               <h2 class="mb-4">Categories</h2>
               <ul class="list-group list-group-flush">
                  @foreach( $param_categories as $item)
                     <li class="px-0 list-group-item d-flex justify-content-between align-items-center">
                        <a href="{{ url($item->slug) }}">{{ $item->name }}</a>
                        <span class="badge badge-primary badge-pill">{{ $item->countCategory() }}</span>
                     </li>
                  @endforeach
               </ul>
            </div>

            <!-- Recent Post -->
            <div class="mb-5">
               <h2 class="mb-4">Recent Post</h2>
               
               @foreach($param_recentposts as $item)
                  <div class="mb-3 overflow-hidden rounded shadow-sm d-flex align-items-center bg-light">
                     @if(!empty($item->getImage()))
                        <img class="img-fluid" src="{{ $item->getImage()}}" style="width: 80px; height: 80px; object-fit:cover;" />
                     @endif
                     <div class="pl-3">
                        <a href="{{ url($item->slug) }}"><h5 class="">{!! strip_tags(Str::substr($item->title, 0, 40)) !!}</h5></a>
                        <div class="d-flex">
                           <small class="mr-3"><i class="fa fa-user text-primary"></i> {{ $item->user_name}}</small>
                           <small class="mr-3">
                              <a href="{{ url($item->category_slug) }}"><i class="fa fa-folder text-primary"></i> {{ $item->category_name}}</a>
                           </small>
                           <small class="mr-3"><i class="fa fa-comments text-primary"></i>  {{ $item->getCommentCount() }}</small>
                        </div>
                     </div>
                  </div>
               @endforeach

            <!-- Tag Cloud -->
            @if(!empty($param_record->getTags->count()))
            <div class="mb-5">
               <h2 class="mb-4">Tag Cloud</h2>
               <div class="flex-wrap d-flex m-n1">
                  @foreach($param_record->getTags as $item)
                     <a href="{{ url('blog?q='.$item->tag)}}" class="m-1 btn btn-outline-primary">{{ $item->tag}}</a>
                  @endforeach
               </div>
            </div>
            @endif

         </div>
      </div>
   </div>
   <!-- Detail End -->
@endsection

@section('scripts')
   <script type="text/javascript">
      $('.trigger-showreply').click(function() {
         var id = $(this).attr('id');
         $('.showreply'+id).toggle();
      })

   </script>
@endsection
