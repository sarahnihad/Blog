<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\File;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\postrequest;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cates=Category::all();
        $users=User::all();
        $posts=Post::latest()->paginate(10);
        return view('admin.posts',compact('posts','users','cates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cates=Category::all();
        $users=User::all();
    
        return view('admin.postadd',compact('users','cates'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(postrequest $request)
    
    {
        // to save image in file of the public
        if($full=$request->file('full_img')){
            $primg=time().".".$full->getClientOriginalExtension();
             $thumdes='images/postimg/' .$primg;
             $full->move($thumdes,$primg); }


           if($thum=$request->file('thumb')){
            $prothump=time().".".$thum->getClientOriginalExtension();
             $des='images/postthumb/' .$prothump;
             $thum->move($des,$prothump); }


          
          //save data
          $post= new Post;
          $post->user_id=$request->user_id;
          $post->cat_id=$request->cat_id;
          $post->titel=$request->titel;
          $post->content=$request->content;
          $post->tags=$request->tags;

          $post->full_img=$primg;
          $post->thumb=$prothump;
          $post->save();
   
          return redirect()->back()->with('message','Category save Successfully');
   



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cates=Category::all();
        $users=User::all();
        $post = Post::find($id);
        
        return view('admin.postedit',compact('post','users','cates'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(postrequest $request, $id)
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
                      $post->img=$proimgfull;
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {
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
}
