<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\File;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\categoryrequest;
use Illuminate\Support\Facades\Storage;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat=Category::latest()->paginate('10');
        return view('admin.category',compact('cat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categoryadd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(categoryrequest $request)
    {
        
       
        if($imge=$request->file('img')){
        
         $proimg=time().".".$imge->getClientOriginalExtension();
          $des='images/category/' .$proimg;
          $imge->move($des,$proimg);
       
        }


       
       //save data
       $cate= new Category;
       $cate->titel=$request->titel;
       $cate->details=$request->details;
       $cate->img=$proimg;
       $cate->save();

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
        $cate = Category::find($id);
        
        return view('admin.categoryedit',compact('cate'));
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

      
          $cate = Category::find($id);

          if($imge=$request->file('img')){
     
          if ($cate->img) {
                $oldImagePath ='images/category/' . $cate->img.'/'. $cate->img;
                if (File::exists($oldImagePath)) {
                    File::delete($oldImagePath);} 

                            $proimg=time().".".$imge->getClientOriginalExtension();
                            $des='images/category/'. $proimg;
                            $imge->move($des,$proimg);
                            $cate->img=$proimg;

}

       $cate->titel=$request->titel;
       $cate->details=$request->details;
      
       $cate->update();}

       return redirect()->back()->with('message','Category Updated Successfully');


}
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cate = Category::find($id);
        
        if ($cate->img) {
            $oldImagePath ='images/category/' . $cate->img.'/'. $cate->img;
            if (File::exists($oldImagePath)) {
                File::delete($oldImagePath);} 


}



        $cate->delete();
        return redirect()->back()->with('message','Deleted   Successfully');


    }
}
