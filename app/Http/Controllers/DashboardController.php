<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    public function SellerDashboard()
    {
        $products = DB::table('products')
            ->join('users', 'users.id', '=', 'products.user_id')->where("products.ended_bid", '1')->get();

 

    $SoldItem = DB::table('products')->where('products.user_id', Auth::id())
            ->where('products.ended_bid', '=', 1)->get();



        $allProducts = DB::table('buyers')
            ->join('products', 'buyers.id', '=', 'products.user_id')
            ->where('products.user_id', '=', Auth::id())
            ->get();

        return view("Dashboard.Seller", compact('products', 'allProducts','SoldItem'));
    }

    public function BuyerDashboard()
    {
        $products = DB::table('products')
            ->join('users', 'products.user_id', '=', 'users.id')
            ->where('users.id', Auth::id())
            ->get();
            

        $bids = DB::table('products')
            ->join('buyers', 'products.id', '=', 'buyers.product_id')
            ->where('buyers.user_id', Auth::id())
            ->get();


      

           
        $itemWon = DB::table('products')
            ->join('buyers', 'products.user_id', '=', 'buyers.user_id')
            ->where('buyers.user_id', Auth::id())
            ->where('products.ended_bid', 1)
            ->get();

        return view("Dashboard.Buyer", compact('products', 'bids','itemWon'));
    }
}
