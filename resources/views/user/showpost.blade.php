<!DOCTYPE html>


<html lang="zxx">

@include('user.layouts.head')

<body>
@include('user.layouts.header')

{{-- contat section  --}}
<div class="container">
{{-- show success message  --}}
       @if(Session::has('message'))        
         <p class="alert alert-success">{{ Session::get('message') }} </p>
       @endif

              {{-- this show error mssage --}}
              @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                  @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
                  @endforeach
                  </ul>
                  </div>
               @endif

<div class="row">
<div class="col-md-8 mt-4">


   
    <div class="card" style="width: 100%;">

      <div class="card-header d-flex justify-content-between " style="background:gainsboro">
        <small style="text-align: left"  >Created By: {{$post->postuser->name}}</small>
        <small style="text-align: right" >Date: {{$post->created_at}}</small>
      </div>

    
        <img class="card-img-top " src="{{asset('images/postimg').'/'.$post->full_img .'/'.$post->full_img}}" alt="Card image cap">
        <div class="card-body">
            <h6>{{$post->titel}}</h6>
          <p class="card-text">{{$post->content}}</p>

         
          {{-- form for add comment  --}}
          <form action="{{route('storecomment')}}" method="post" class="mt-4">
            @csrf
            <div class="input-group mb-3">
             
             <input class="form-control" type="text" placeholder="Comment here…" name="comment">
             <input class="form-control" type="text" value="{{auth()->user()->id}}" name="user_id" hidden>
             <input class="form-control" type="text" value="{{$post->id}}"  name="post_id" hidden>
            
            
            <div class="input-group-prepend ">
                <button class="btn btn-sm btn-outline-secondary" type="submit">Post</button>
              </div> 
            </div>
         
           </form>

            {{-- end of form  --}}

          
           <hr>  <h6 class="text-primary"> Comments: </h6>
         
            @foreach($post->postcomment->reverse() as $comment)
            <div class="clearfix ">   
             
                 <strong class="float-left"> 
                   {{$comment->commanduser->name}}
                  <p>{{$comment->comment}} </p> 
                  <p class="">{{$comment->created_at->diffForHumans()}}</p>
                </strong> 
             
              
            <br> <br> <p class="float-right">  
             @if(auth()->user()->id == $comment->user_id)
            <a href="#" data-toggle="modal" data-target="#exampleModal{{$comment->id}}"> <i class="fa-solid fa-pen"></i></a>
            <a href="{{route('deletecomment',$comment->id)}}"><i class="fa fa-trash" aria-hidden="true"></i></a></p>
             @endif 
               </div>

            <hr>


           <!-- Modal -->
<div class="modal fade" id="exampleModal{{$comment->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit comment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('updatecomment',$comment->id)}}" method="post">
          @csrf
          @method('PUT')
        <input class="form-control" type="text" placeholder="Comment here…" name="coment" value="{{$comment->comment}}">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div></form>
    </div>
  </div>
</div>
                
 {{--this s the end if modal--}}  

 
      @endforeach 
                
        </div>
         

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
      <small class="text-light">Copyright © 2023 by <a href="#">Sarah</a></small>
    </div>
  </div>
</footer>

<!-- plugins -->
@include('user\layouts\js')

</body>
</html>

