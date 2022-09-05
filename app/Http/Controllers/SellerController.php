<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Product;
use App\Models\Seller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function registration()
    {
        return view('seller.registration');
    }
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('seller-item');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function show(Seller $seller)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function edit(Seller $seller)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seller $seller)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seller $seller)
    {
        //
    }

    public function MyItemDetails($id)
    {
        $MAX_PRICE = DB::table('buyers')
            ->where('product_id', '=', $id)
            ->max('price');
        $MAX_PRICE_USER_ID = DB::table('buyers')
            ->where('product_id', '=', $id)
            ->max('user_id');

        $bidders = DB::table('buyers')
            ->join('users', 'users.id', '=', 'buyers.user_id')
            ->where('product_id', '=', $id)
            ->get();

        // dd($bidders);

        // dd($min_id);
        $products = Product::where('id', $id)->first();
        $remaining_days = Carbon::now()->diffInDays(
            Carbon::parse($products->ending_date)
        );

        $images = DB::table('products')
            ->where('products.id', $id)
            ->join('images', 'images.product_id', '=', 'products.uniqueId')
            ->get();

        $bids = Product::where('id', $id)->first();
        $count_bidder = Buyer::where('product_id', $id)->count();

        return view(
            'MyItemDetails',
            compact(
                'products',
                'MAX_PRICE',
                'count_bidder',
                'images',
                'remaining_days',
                'MAX_PRICE_USER_ID',
                'bidders'
            )
        );
    }
}
