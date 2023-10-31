
<!DOCTYPE html>
<html lang="en">

 @include('admin.layouts.head')


  <body>
    <div class="container-scroller">
    
      <!-- partial:partials/_navbar.html -->
    @include('admin.layouts.nav')

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
       @include('admin.layouts.sidebar')
        <!-- partial -->

   
        <div class="main-panel">

          <div class="content-wrapper">    
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Edit
              </h3>
          
            </div>
            
            @if (count($errors) > 0)
              @foreach ($errors->all() as $error)
            
                <p class="alert alert-danger">{{$error}} </p>
              @endforeach
            @endif

            @if(Session::has('message'))         
          
           <p class="alert alert-success">{{ Session::get('message') }} </p>
          
             @endif



           
            <div class="row">
             
            
             


                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Edit {{$role->name}}</h4>
                      
                        <form class="forms-sample"  action="{{route('roleupdate',$role->id)}}" method="POST">
                          @csrf
                          @method('PUT')
                          <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input type="text" class="form-control" value="{{$role->name}}" id="exampleInputName1" placeholder="Name" name="name">
                          </div>
                        
                    
                          <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                         
                        </form>
                      </div>
                    </div>
                  </div>



     
                
            </div>

            
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © 2023</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->

    <script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.cookie.js')}}" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('assets/js/table.js')}}"></script>
    <script src="{{asset('assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('assets/js/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('assets/js/dashboard.js')}}"></script>
    <script src="{{asset('assets/js/todolist.js')}}"></script>
    <!-- End custom js for this page -->

  </body>
</html>