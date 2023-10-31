<?php

namespace App\Http\Controllers\user;

use Exception;
use App\Models\Post;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(postrequest $request)
    {
        try {
            // Your form processing logic here
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
          return redirect()->back();
        } catch (Exception $e) {
          dd($e);
        }
        
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
