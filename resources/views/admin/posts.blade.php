<!DOCTYPE html>
<html lang="en">

 @include('admin.layouts.head')

 {{-- /* to breaklines cotent in the cell  */ --}}

   <style>
   .break{
    white-space: normal !important;
                      word-break: normal !important;
                      word-wrap: break-word !important;
  }
 </style>
 {{-- /* end the style to breaklines cotent in the cell  */ --}}
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
                </span> Posts
              </h3>
           
              </div>
              <div class="row">
             {{-- table start --}}
                <div class="form-group pull-right">
                    <input type="text" class="search form-control" placeholder="What you looking for?">
                </div>
                <span class="counter pull-right"></span>
                <div style="overflow-x:auto;">

                  {{-- button to add new role  --}}
                  <a type="button" class="btn btn-success" href="{{route('postadd')}}"><i class="fa-solid fa-plus" ></i></a>
                  {{-- end button to add new role  --}}


                  <table class="table table-hover table-bordered results table-responsive">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th class="col-md-5 col-xs-5"> User </th>
                      <th class="col-md-3 col-xs-3">Category</th>
                      <th class="col-md-3 col-xs-3">Post Titel</th>
                      <th class="col-md-3 col-xs-3">Post Content</th>
                      <th class="col-md-3 col-xs-3">Post Tags</th>
                      <th class="col-md-3 col-xs-3">Post image</th>
                      <th class="col-md-3 col-xs-3">thumb image</th>




                      <th class="col-md-3 col-xs-3">Edit</th>
                      <th class="col-md-3 col-xs-3">Delete</th>

                    </tr>
                    <tr class="warning no-result">
                      <td colspan="4"><i class="fa fa-warning"></i> No result</td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; ?>
                    @foreach($posts as $post )
                    <tr>
                      <th scope="row">{{$i++}}</th>
                      <td>{{$post->postuser->name}}</td>
                      <td>{{$post->postcategory->titel}}</td>
                      <td> {{$post->titel}} </td>
                      <td class="break"><p> {{$post->content}} </p></td>
                      <td > {{$post->tags}} </td>
                      <td ><img src="{{asset('images/postimg').'/'.$post->full_img .'/'.$post->full_img}}" alt=""> </td>
                      <td><img src="{{asset('images/postthumb').'/'.$post->thumb .'/'.$post->thumb}}" alt=""> </td>
                      <td><a href="{{route('postedit',$post->id)}}"><i class="fas fa-edit"></i></a> </td>
                      <td > 
                         <button style="border: none" data-toggle="modal" data-target="#exampleModal{{$post->id}}">
                         <i class="fa fa-trash  " style="color:brown" aria-hidden="true"></i>  
                         </button> 
                      </td>

      {{-- modal of delete  --}}
         <div class="modal fade" id="exampleModal{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Delete : {{$post->titel}}</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
         </div>
         <div class="modal-body">
          Are you sure you want to delete this category ?
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <a type="button" class="btn btn-primary" href="{{route('deletecategory',$post->id)}}">Yes sure !</a>
      </div>
    </div>
  </div>
</div>
 {{-- end of delete modal  --}}

                     




                    

                    </tr>
                    @endforeach
                  </tbody>
                </table>
                
              
            </div>
             
  <div  id="pagination"> {{$posts->links()}}</div> 
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