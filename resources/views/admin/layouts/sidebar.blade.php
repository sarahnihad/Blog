<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
     
      <li class="nav-item">
        <a class="nav-link" href="{{route('dash')}}">
          <span class="menu-title">All Users </span>
          <i class="mdi mdi-home menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-title">Roles</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-crosshairs-gps menu-icon"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('roles')}}">All Roles </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('addrole')}}">Add Role</a></li>
          </ul>
        </div>
      </li>
   
   
 
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
          <span class="menu-title">Category</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-medical-bag menu-icon"></i>
        </a>
        <div class="collapse" id="general-pages">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('category')}}">All  Categore </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('categoryadd')}}"> Add Category </a></li>
           
          </ul>
        </div>
      </li>



      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-title">Posts</span>
          <i class="menu-arrow"></i>
         
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('posts')}}">All Posts </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('postadd')}}">Add Post</a></li>
          </ul>
        </div>
      </li>




      
    </ul>
  </nav>