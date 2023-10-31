<?php

namespace App\Http\Controllers\user;

use Illuminate\Support\Facades\File;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories =Category::latest()->paginate(10);
        return view('user.category' , compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

// this shows the posts that the user share 
    public function mypost()
    {
     $cates=Category::all();
      $user=Auth::user();
      $post=$user->userpost;
      return view ('user.myposts',compact('post','cates'));


    }

    public function editmypost($id)
    {
    
      $post=Post::find($id);
      return view ('user.editmyposts',compact('post'));

      


    }
    public function updatemypost(Request $request,$id)
    {
    

        $post = Post::find($id);

        if($thumbimg=$request->file('thumb') ){
   
        if ($post->thumb) {
              $oldImagePaththumb ='images/postthumb/' . $post->thumb.'/'. $post->thumb;
            
              if (File::exists($oldImagePaththumb) ) {
                  File::delete($oldImagePaththumb);
                 
              } 

                          $proimgthumb=time().".".$thumbimg->getClientOriginalExtension();
                          $desthumb='images/postthumb/'. $proimgthumb;
                          $thumbimg->move($desthumb,$proimgthumb);
                           
     $post->thumb=$proimgthumb;


}
        }

if($fullimg=$request->file('full_img') ){
   
  if ($post->full_img) {
        $oldImagePathfull ='images/postimg/' . $post->full_img.'/'. $post->full_img;
      
        if (File::exists($oldImagePathfull) ) {
            File::delete($oldImagePathfull);
           
        } 

                    $proimgfull=time().".".$fullimg->getClientOriginalExtension();
                    $desfull='images/postimg/'. $proimgfull;
                    $fullimg->move($desfull,$proimgfull);
                   
 $post->full_img=$proimgfull;

}



}


     $post->titel=$request->titel;
     $post->content=$request->content;
     $post->tags=$request->tags;
     $post->cat_id=$request->cat_id;
     $post->user_id=$request->user_id;

     $post->update();

     return redirect()->back()->with('message','Post Updated Successfully');




        
    }

    public function deletemypost($id){

        $post = Post::find($id);

        $post = Post::find($id);

        if ($post->thumb && $post->full_img ) 
         {

              $oldImagePaththumb ='images/postthumb/' . $post->thumb.'/'. $post->thumb;
              $oldImagePathfull ='images/postimg/' . $post->full_img.'/'. $post->full_img;

                  if (File::exists($oldImagePaththumb) ) {
                  File::delete($oldImagePaththumb); }
                  if (File::exists($oldImagePathfull) ) {
                    File::delete($oldImagePathfull); }
                
         }
                $post->delete();


                return redirect()->back()->with('message','Post Deleted Successfully');



    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $category=Category::find($id);
         $post=$category->categorypost;
         return view ('user.catepost',compact('post', 'category'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
