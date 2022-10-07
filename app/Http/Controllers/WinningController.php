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
    $products  = DB::table('products')
            ->join('buyers',  'buyers.product_id', '=', 'products.id')->where('buyers.user_id',  Auth::id())->get();

        // dd($MyBids);
        
       








        return view('WinningBid.win', compact('products'));
    }
}
