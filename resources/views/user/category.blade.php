<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="zxx">

@include('user.layouts.head')



<body>

@include('user.layouts.header')

{{-- contat section  --}}
<div class="container">
<div class="card mt-4 d-flex justify-content-center">
  <div class="card-header " style="background:rgb(162, 159, 159) ">
   <h5 style="color: white"> Categories </h5>
  </div>
  <div class="card-body ">
      <div class="row" >
        @foreach ($categories as $category )
          
        <div class="col mt-2 d-flex justify-content-center">

        <a href="{{route('catepost',$category->id)}}">  <div class="card" style="width: 18rem;" >
            <img class="card-img-top" src="{{asset('images/category').'/'.$category->img .'/'.$category->img}}" alt="Card image post" style="width:300px;height:200px">
            <div class="card-body">
              <p class="card-text" style="white-space:nowrap; overflow: hidden; text-overflow: ellipsis;">{{$category->details}}</p>
            </div>
        
          </div></a>
 
        </div>

  @endforeach


  
      </div>
    
{{-- end row --}}
{{-- row for paginate link  --}}
<div class="row d-flex justify-content-center" >{{$categories->links() }}</div>
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

