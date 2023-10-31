
<header class="sticky-top navigation">
    <div class=container>
      <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <a class=navbar-brand href="index.html"><img class="img-fluid" src="{{asset('images/logo.png')}}" alt="godocs"> BLOG</a>
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navigation">
          <i class="ti-align-right h4 text-dark"></i></button>
        <div class="collapse navbar-collapse text-center" id=navigation>
          <ul class="navbar-nav mx-auto align-items-center">
            <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a></li>
      

            @guest

                <li class="nav-item"><a class="nav-link" href="{{route('register')}}">Register </a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('login')}}">LogIn </a></li>

            @endguest
          
                     @auth  
                     @role('admin')
                     <li class="nav-item"><a class="nav-link" href="{{route('dash')}}">Dashboard</a></li>
                     @endrole
                
           
                <li class="nav-item"><a  class="nav-link" href="{{route('mypost')}}">My Posts</a></li>
              
                    
                <li class="nav-item"><a class="nav-link" href="{{route('categoryy')}}">Categories</a></li>
                     



                      <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item" >
                        <li class="nav-item"></i> Signout </li></button></form>
        
                    @endauth
            
          </ul>
     

        </div>
      </nav>
    </div>
  </header>