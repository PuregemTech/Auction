<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    //

    public  function Category($id)
    {

        $categories = DB::table('products')
            ->where('products.category', '=', $id)->get();

        $showThreeBookItem = DB::table('products')->where('products.category', '=', 3)->get();
        $showJeweleryItem = DB::table('products')->where('products.category', '=', 6)->get();
        $showThreeWatchItem = DB::table('products')->where('products.category', '=', 2)->get();
        $showThreeShoeItem = DB::table('products')->where('products.category', '=', 4)->get();


        return view('category.Item', compact('categories', 'showThreeBookItem', 'showJeweleryItem', 'showThreeWatchItem', "showThreeShoeItem"));
    }
}
