    <!-- Navbar Start -->
    <div class="shadow container-fluid bg-light position-relative">
       <nav class="px-0 py-3 navbar navbar-expand-lg bg-light navbar-light py-lg-0 px-lg-5">
          {{-- <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px">
             <i class="flaticon-043-teddy-bear"></i>
             <span class="text-primary">Rani Hospital</span>
          </a>
          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
             <span class="navbar-toggler-icon"></span>
          </button> --}}

          {{-- Navigation Menu --}}
          <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
             <div class="py-0 mx-auto navbar-nav font-weight-bold">
                @php
                   $categoryHeader = App\Models\Category::getCategoryMenu();
                @endphp
                <a href="{{ url('') }}" class="nav-item nav-link @if(request()->segment(1) == '') active @endif">Home</a>
                <a href="{{ url('blog') }}" class="nav-item nav-link @if(request()->segment(1) == 'blog') active @endif">Blog</a>
                @foreach ($categoryHeader as $item)
                   <a href="{{ url($item->slug) }}" class="nav-item nav-link @if(request()->segment(1) == $item->slug) active @endif">{{ $item->name }}</a>
                @endforeach
             </div>
                             
             <a href="{{ url('login') }}" class="px-4 btn btn-primary">Login</a>
             <a href="{{ url('register') }}" style="margin-left:10px" class="px-4 btn btn-primary">Register</a>
       </nav>
    </div>
    <!-- Navbar End -->
