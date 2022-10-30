<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use KingFlamez\Rave\Facades\Rave as Flutterwave;
use Illuminate\Http\Request;

class FlutterwaveController extends Controller
{
    /**
     * Initialize Rave payment process
     * @return void
     */
    public function initialize(Request $request)
    {

        //This generates a payment reference


        dd($request->id);
        $page = Page::find($id);

        // Make sure you've got the Page model
        if ($page) {
            $page->image = 'imagepath';
            $page->save();
        }









        $data = [
            "tx_ref" => rand(),
            "amount" => $request->amount,
            "currency" => 'NGN',
            "redirect_url" => route('callback'),
            'customer' => [
                'email' => Auth::user()->email,
                'phonenumber' => Auth::user()->phone,
                'name' => Auth::user()->name,
            ],
        ];
        $url = "https://api.flutterwave.com/v3/payments";
        $headers = [
            'Content-Type: application/json',
            'Authorization: Bearer FLWSECK_TEST-42fbf3113ef95c5a48e0572b84c19050-X' //Secret key of your account 
        ];

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 200);
        curl_setopt($curl, CURLOPT_TIMEOUT, 200);
        $response_body = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        $result = json_decode($response_body, true);
        if ($err) {
            throw new \Exception($err);
        }

        if (isset($result['status']) && $result['status'] == 'success') {
            if (isset($result['data']['link']) && $result['data']['link'] != ' ') {
                return Redirect::to($result['data']['link']);
            }
        }

        throw new \Exception('Your transaction could not processed.');
    }

    /**
     * Obtain Rave callback information
     * @return void
     */
    public function callback()
    {

        $status = request()->status;

        //if payment is successful
        if ($status ==  'successful') {

            $transactionID = Flutterwave::getTransactionIDFromCallback();
            $data = Flutterwave::verifyTransaction($transactionID);
            dd($data);
        } elseif ($status ==  'cancelled') {
            return redirect()->back();
            //Put desired action/code after transaction has been cancelled here
        } else {
            return redirect('/home');
            //Put desired action/code after transaction has failed here
        }
        // Get the transaction from your DB using the transaction reference (txref)
        // Check if you have previously given value for the transaction. If you have, redirect to your successpage else, continue
        // Confirm that the currency on your db transaction is equal to the returned currency
        // Confirm that the db transaction amount is equal to the returned amount
        // Update the db transaction record (including parameters that didn't exist before the transaction is completed. for audit purpose)
        // Give value for the transaction
        // Update the transaction to note that you have given value for the transaction
        // You can also redirect to your success page from here

    }
}
