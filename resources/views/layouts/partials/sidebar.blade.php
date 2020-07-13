<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Kelompok<sup>89</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!--Navbar Question  -->
       <li class="nav-item {{(request()->is('question')) ? 'active' :''}}">
        <a class="nav-link" href="{{url('/question')}}">
          <i class="fas fa-fw fa-cog"></i>
          <span>Question</span></a>
      </li>
  
       <li class="nav-item {{(request()->is('categories')) ? 'active' :''}}">
        <a class="nav-link" href="{{url('/categories')}}">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Category</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>