<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Session;

class Filter extends Controller
{
    //
    function catFilter($id)
    {
    $data= Product::where('category_id', $id)->get();
    return view('categoryfilter',['product'=>$data]);
    
}
function display()
{
    $data= Category::where('parent_id', 0)->get();

        return view('filterview',['products'=>$data]);
}

function authenticate()
{
    $users= User::all();

}
}
