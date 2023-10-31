
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
                </span> <a href="{{route('posts')}}">All Posts</a>/Add Post
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
                        <h4 class="card-title">Add Categories</h4>
                      
                        <form class="forms-sample"  action="{{route('posteupdate',$post->id)}}" method="post" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          @method('PUT')
                          
                          
                   <div class="form-group">
                            <select name="user_id"  class="form-control"  id="exampleInputName1">
                              <option value="{{$post->postuser->id}}" selected>{{$post->postuser->name}}</option>
                                @foreach($users as $user )
                                @if($user->name == 'admin' || $user->name == $post->postuser->name )
                                @continue
                                @else{<option value="{{$user->id}}">{{$user->name}}</option>} 
                                @endif
                                @endforeach
                            </select>
                     </div>
                         


                          <div class="form-group">
                              <select name="cat_id" id=""  class="form-control"  id="exampleInputName1">
                              
                                    <option value="{{$post->postcategory->id}}" selected>{{$post->postcategory->titel}}</option>
                                    @foreach ($cates as $cate ) 
                                      @if ($post->postcategory->titel == $cate->titel)
                                      @continue
                                      @else
                                      {<option value="{{$cate->id}}">{{$cate->titel}}</option>} 
                                      @endif
                                      @endforeach
                              </select>
                           </div>




                          <div class="form-group">
                            <input type="text" class="form-control"  id="exampleInputName1" placeholder="Title" name="titel" value="{{$post->titel}}">
                          </div>
                         


                        
                           {{-- /// --}}
                            <div class="form-group">
                              <textarea type="text" class="form-control"  id="exampleInputName1" placeholder="Content" name="content">{{$post->content}}</textarea>
                             </div>
                          {{-- //// --}} 
                         

                          <div class="form-group">
                            <input type="text" class="form-control"  id="exampleInputName1" placeholder="Tags" name="tags" value="{{$post->tags}}">
                          </div>
                         

                          <img src="{{asset('images/postthumb').'/'.$post->thumb .'/'.$post->thumb}}" alt="" style="width:200px; height:200px; margin :10px">

                          <div class="form-group">
                            <label style="font-weight: 500"  >Thumb Image</label>
                            <input type="file" class="form-control"  id="exampleInputName1"  name="thumb"  value="{{$post->thumb}}">
                          </div>


                          <img src="{{asset('images/postimg').'/'.$post->full_img .'/'.$post->full_img}}" alt="" style="width:200px; height:200px; margin :10px">

                          <div class="form-group">
                            <label style="font-weight: 500"  >Full Image</label>
                            <input type="file" class="form-control"  id="exampleInputName1"  name="full_img"  value="{{$post->full_img}}" >
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