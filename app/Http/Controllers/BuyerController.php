<?php

namespace App\Http\Controllers;

use App\Models\BuyerProduct;
use App\Models\Buyer;
use App\Models\User;
use App\Notifications\SellerNotication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Notification;

class BuyerController extends Controller
{
    //

    public function SubmitBidFinally(Request $request)
    {



        $bids = Buyer::where('buyers.user_id', '=', Auth::id())->where('buyers.product_id', "=", $request->product_id)->get();

        if (count($bids) == 0) {

            if (Auth::check()) {
                $data = new Buyer;


                $request->validate([
                    'price' => 'required',
                    'product_id' => 'required',
                    'product_id' => 'required',
                ]);

                $data->product_id = $request->product_id;
                $data->price = $request->price;
                $data->name = $request->name;
                $data->user_id = Auth::id();
                $data->save();


                $userSchema = User::first();
                $offerData = [
                    'name' => Auth::user()->name,
                    'body' => Auth::user()->name . ' ' . 'has bid an amount of ' . $request->price,
                    'thanks' => 'Thank you',
                    'offerText' => 'Check out the offer',
                    'offerUrl' => url('/'),
                    'offer_id' => 007
                ];

                Notification::send($userSchema, new SellerNotication($offerData));

                // return rediret()->back();

                //     Product::create($input);
                return back()->with('success', 'Your bid is successful! Go to the dashboard');
            }
            // user doesn't exist

        } else {

            $bids = Buyer::where('buyers.user_id', '=', Auth::id())->where('buyers.product_id', "=", $request->product_id)->get()->first();
            $bids->price = $request->price;
            $bids->save();
            return back()->with('success', 'Your bid is successful! Go to the dashboard');
        }
    }


    public function UpdateSubmitBidFinally(Request $request, $id)
    {
        if (Auth::check()) {
            $data = new Buyer;


            $request->validate([
                'price' => 'required',

            ]);

            $user = Buyer::where("user_id", Auth::id())->where('product_id', '=', $id)->update([
                "name" => $request->name,
                "surname" => $request->surname,
                "tel" => $request->tel,
                "country" => $request->country,
                "city" => $request->city,
                "region" => $request->region,
                "email_work" => $request->email
            ]);
            // return rediret()->back();

            //     Product::create($input);
            return back()->with('success', 'Your bid is successful Go to the dashboard');
        }
    }





    public function MyBidItem()
    {



        $MyBids  = DB::table('products')
            ->join('buyers',  'buyers.product_id', '=', 'products.id')->where('buyers.user_id',  Auth::id())->get();









        return view("buyer.MyBid", compact('MyBids'));
    }


    public function showUserThatHavePaid()
    {
        $products  = DB::table('products')->where('paid_item',  Auth::id())->get();

        return view("buyer.Paid", compact('products'));
    }
}
