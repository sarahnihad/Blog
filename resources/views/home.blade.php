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


<div class="row">

<div class="col-md-8">
  <div class="card-body">
      <div class="row">
        @foreach ($posts as $post )
          
        <div class="col-md-4  mt-2  ">

          <div class="card" style="width: 12rem;">
            <img class="card-img-top" src="{{asset('images/postimg').'/'.$post->full_img .'/'.$post->full_img}}" alt="Card image post" style="width:300px;height:150px">
            <div class="card-body">
              <p class="card-text" style="white-space:nowrap; overflow: hidden; text-overflow: ellipsis;">{{$post->content}}</p>
              <a type="button" href="{{route('showpost',$post->id)}}"  class="btn btn-danger btn-sm " style="font-size: 10px ; color:antiquewhite" >read More</a>
            </div>
        
          </div>
 
        </div>

  @endforeach

      </div>
    
{{-- end row --}}
{{-- row for paginate link  --}}
<div class="row d-flex justify-content-center" >{{$posts->links() }}</div>
{{-- end row paginate --}}

</div>
  {{-- end of card body --}}


</div>
{{-- end lift column  --}}

{{-- right column --}}
<div class="col-md-2 ">

  <div class="card mt-4" style="width: 14rem; background:gainsboro">
    <div class="card-header">
      Latest Posts
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Cras justo odio</li>
      <li class="list-group-item">Dapibus ac facilisis in</li>
      <li class="list-group-item">Vestibulum at eros</li>
    </ul>
  </div>
  {{-- end of card  --}}

{{-- 2 card --}}
  <div class="card " style="width: 14rem; background:gainsboro">
    <div class="card-header">
      Latest Posts
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Cras justo odio</li>
      <li class="list-group-item">Dapibus ac facilisis in</li>
      <li class="list-group-item">Vestibulum at eros</li>
    </ul>
  </div>


  {{-- end of 2 card  --}}




</div>

{{-- end right colmun --}}

</div> {{--//end of big row --}}

  
</div>
{{-- end contat section  --}}


<footer>
  <div class="container">
    <div class="row align-items-center border-bottom py-5">
    
     
 
    </div>
    <div class="py-4 text-center">
      <small class="text-light">Copyright © 2020 a hugo theme by <a href="https://themefisher.com">themefisher</a></small>
    </div>
  </div>
</footer>

<!-- plugins -->
@include('user\layouts\js')

</body>
</html>

