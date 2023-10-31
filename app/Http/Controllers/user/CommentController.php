<?php

namespace App\Http\Controllers\user;

use App\Models\Command;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
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
    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required|max:255',
            'user_id' => 'required',
            'post_id' =>'required',
            
        ]);

        $comment= new Command();
        $comment->user_id=$request->user_id;
        $comment->post_id=$request->post_id; 
        $comment->comment=$request->comment;
        $comment->save();
        return redirect()->back()->with('message','Comment has been added ');
   
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

        $comment=Command::find($id);
        $request->validate([ 'coment' => 'required|max:255',]);
        $comment->comment=$request->coment;
        $comment->update();
        return redirect()->back()->with('message','Comment has been updated ');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment=Command::find($id);
        $comment->delete();
        return redirect()->back()->with('message','Comment has been deleted ');

    }
}
