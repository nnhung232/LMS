<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Category;

class CategoriesController extends Controller
{
    public function index(){
        //$categories = DB::table('categories')->get();
        $categories = Category::all();
        return view('categories.index')->with([
            'categories' => $categories
        ]);
    }

     public function show($id){
         $category = Category::find($id);
         return $category;
     }
}
