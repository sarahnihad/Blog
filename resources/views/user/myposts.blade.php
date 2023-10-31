<!DOCTYPE html>

<html lang="zxx">

@include('user.layouts.head')

<body>
@include('user.layouts.header')

{{-- contat section  --}}

<div class="container">

  <div class="card d-flex justify-content-center ">
    
  <div class="card-header d-flex justify-content-between  " style="background:rgb(248, 194, 194) ">
    
  <h5 style="color: white;"> My Posts </h5>
  

  </div>
  <div class="card-body ">
      <div class="row" >
        @foreach ($post as $po )
          
        <div class="col mt-2 d-flex justify-content-center">

          <div class="card" style="width: 18rem; ">
            <img class="card-img-top" src="{{asset('images/postimg').'/'.$po->full_img .'/'.$po->full_img}}" alt="Card image post" style="width:300px;height:200px">
            <div class="card-body">
              <p class="card-text" style="white-space:nowrap; overflow: hidden; text-overflow: ellipsis;">{{$po->titel}}</p>
              <a href="{{route('editmyposts',$po->id)}}"><i class="fas fa-edit"></i></a>
              <a href="{{route('deletemyposts',$po->id)}}"><i class="fa fa-trash" aria-hidden="true"></i>
              </a>
              <a href="{{route('showpost',$po->id)}}"><i class="fa-solid fa-eye"></i>
              </a>
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

