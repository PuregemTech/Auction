<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\DB;

class WinningController extends Controller
{
    //

    public function Index()
    {
        $products  = DB::table('buyers')
            ->join('products',  'buyers.product_id', '=', 'products.id')->where('buyers.user_id',  Auth::id())
            ->where('products.ended_bid',  1)->get();


    

        // dd($MyBids);










        return view('WinningBid.win', compact('products'));
    }
}
