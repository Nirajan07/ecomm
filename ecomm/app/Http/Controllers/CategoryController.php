<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    //
     function save(Request $request)
    {
  //return $request->input();

        $request->validate([
        'name' => 'required',
        'description' => 'required',
       ]);


         $category = Category::create([
         'name' => $request->input('name'),
         'description' => $request->input('description'),
         'slug' => $request->input('slug'),
         'parent_id' =>$request->input('parent_id')
     ]);
         
        

        if ($category->save()){

            return redirect()->route('/createcategory');
        }else{
            return redirect->back();
        }
}
      

         function create()
    {
        $categories = Category::all();
         return view('create.createcategory', compact('categories'));
    }

// public function createproduct()
//     {
//         $categories = Category::all();
//         return view('create.createproduct', compact('categories'));
//     }


        static function list()
    {
        $data= Category::all();
        return view('header', ['category'=>$data]);
    }
    
}
