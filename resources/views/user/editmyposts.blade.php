<!DOCTYPE html>

<html lang="zxx">

@include('user.layouts.head')

<body>
@include('user.layouts.header')

{{-- contat section  --}}

<div class="container">

  <div class="card d-flex justify-content-center ">
    
  <div class="card-header d-flex justify-content-between  " style="background:rgb(248, 194, 194) ">
    
  <h5 style="color: white;">Edit My Posts </h5>
 
  

  </div>
  <div class="card-body ">
     
    
 {{-- the Edit form  --}}

 <form class="forms-sample"  action="{{route('updatemyposts',$post->id)}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    @method('PUT')
    
    
<div class="form-group">
<input type="number" value="{{auth()->user()->id}}" name="user_id" hidden>   
</div>
   


    <div class="form-group">
        <input type="number" value="{{$post->postcategory->id}}" name="cat_id" hidden>   
     </div>




    <div class=".form-control-lg">
        <label for=""> Titel : </label>
      <input type="text" class="form-control"  id="exampleInputName1" placeholder="Title" name="titel" value="{{$post->titel}}">
    </div>
   


  
     {{-- /// --}}
      <div class=".form-control-lg">
        <label for=""> Content : </label>
        <textarea type="text" class="form-control"  id="exampleInputName1" placeholder="Content" name="content">{{$post->content}}</textarea>
       </div>
    {{-- //// --}} 
   

    <div class=".form-control-lg">
        <label for=""> Tags : </label>
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












{{-- Edit form  --}}

</div>
  {{-- end of card body --}}



{{-- end lift column  --}}

{{-- right column --}}

{{-- end right colmun --}}



  
</div></div>
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

