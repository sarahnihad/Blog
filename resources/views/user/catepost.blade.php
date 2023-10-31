<!DOCTYPE html>

<html lang="zxx">

@include('user.layouts.head')

<body>
@include('user.layouts.header')

{{-- contat section  --}}

<div class="container">

  <div class="card d-flex justify-content-center ">
    
  <div class="card-header d-flex justify-content-between  " style="background:rgb(248, 194, 194) ">
    <?php $x=count($post )?>
  <h5 style="color: white;">{{ $category->titel}}category has     <?php print($x)?> Posts </h5>
  <a class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$category->id}}" data-whatever="@mdo" href=""  > <i class="fa fa-plus" aria-hidden="true"></i>
  </a>

  {{-- modal for edit --}}
  <div class="modal fade" id="exampleModal{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Post </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{route('addpost')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
          
            <div class="form-group">
              <input type="number" class="form-control" id="recipient-name" value={{auth()->user()->id}} name="user_id" hidden>
            </div>

            <div class="form-group">
              <input type="number" class="form-control" id="recipient-name" value={{$category->id}} name="cat_id" hidden  >
             </div>

            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Title:</label>
              <input type="text" class="form-control" id="recipient-name" name="titel">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Content:</label>
              <textarea class="form-control" id="message-text" name="content"></textarea>
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Tags:</label>
              <input type="text" class="form-control" id="recipient-name" name="tags">
            </div>
            <div class="form-group">
              <label style="font-weight: 500"  >Thumb Image</label>
              <input type="file" class="form-control"  id="exampleInputName1"  name="thumb" >
            </div>

            <div class="form-group">
              <label style="font-weight: 500"  >Full Image</label>
              <input type="file" class="form-control"  id="exampleInputName1"  name="full_img" >
            </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit"  class="btn btn-primary">Share your post</button>
        </div>          
      
      </form>
      </div>
    </div>
  </div>
  {{-- end of modal --}}
  </div>
  <div class="card-body ">
      <div class="row" >
        
        @foreach ($post as $po )
        <div class="col mt-2 d-flex justify-content-center">

          <div class="card" style="width: 18rem; ">
            <img class="card-img-top" src="{{asset('images/postimg').'/'.$po->full_img .'/'.$po->full_img}}" alt="Card image post" style="width:300px;height:200px">
            <div class="card-body">
              <p class="card-text" style="white-space:nowrap; overflow: hidden; text-overflow: ellipsis;">{{$po->titel}}</p>
              <a type="button" href="{{route('showpost',$po->id)}}"  class="btn btn-danger btn-sm " style="font-size: 10px ; color:antiquewhite" >read More</a>

            </div>
        
          </div>
 
        </div>

  @endforeach


  
      </div>
    
{{-- end row --}}
{{-- row for paginate link  --}}
<div class="row d-flex justify-content-center" ></div>
{{-- end row paginate --}}

</div></div>
  {{-- end of card body --}}



{{-- end lift column  --}}

{{-- right column --}}

{{-- end right colmun --}}



  
</div>
{{-- end contat section  --}}


<footer>
  <div class="container">
    <div class="row align-items-center border-bottom py-5">
    
     
 
    </div>
    <div class="py-4 text-center">
      <small class="text-light">Copyright © 2023  by <a href="">Sarah</a></small>
    </div>
  </div>
</footer>

<!-- plugins -->
@include('user\layouts\js')

</body>
</html>

