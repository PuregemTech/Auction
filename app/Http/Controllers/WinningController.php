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
        $bidders = DB::table('products')
            ->join('buyers', 'products.id', '=', 'buyers.user_id')
            ->where('products.ended_bid', '=', '1')
            ->where('buyers', '=', '1')

            ->get();
        
        dd($bidders);








        return view('WinningBid.win', compact('products'));
    }
}
