  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      @if(Auth::user()->is_admin)

         {{-- Dashboard --}}
         <li class="nav-item">
         <a class="nav-link @if(Request::segment(2) != 'dashboard') collapsed @endif" href="index.html">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
         </a>
         </li>

         {{-- User List --}}
         <li class="nav-item">
         <a class="nav-link  @if(Request::segment(2) != 'user') collapsed @endif" href="{{ url('panel/user/list')}}">
            <i class="bi bi-person"></i>
            <span>Users</span>
         </a>
         </li>

         {{-- Category List --}}
         <li class="nav-item">
         <a class="nav-link @if(Request::segment(2) != 'category') collapsed @endif" href="{{ url('panel/category/list')}}">
            <i class="bi bi-question-circle"></i>
            <span>Category</span>
         </a>
         </li>
      @endif   


      {{-- Blog List --}}
      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) != 'blog') collapsed @endif" href="{{ url('panel/blog/list')}}">
          <i class="bi bi-envelope"></i>
          <span>Blog</span>
        </a>
      </li>

      {{-- Help --}}
      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) != 'help') collapsed @endif" href="">
          <i class="bi bi-card-list"></i>
          <span>Help</span>
        </a>
      </li>

      {{-- Inbox --}}
      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) != 'inbox') collapsed @endif" href="">
          <i class="bi bi-card-list"></i>
          <span>Inbox</span>
        </a>
      </li>

    </ul>

  </aside>
