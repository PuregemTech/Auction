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
        $products=[];







        return view('WinningBid.win', compact('products'));
    }
}
