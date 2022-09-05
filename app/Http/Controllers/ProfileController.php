<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    //
    public function index()
    {


        $users = Auth::user();

        if (Auth::check()) {
            if (Auth::user()->user_type == "1") {

                return view('seller.profile', compact("users"));
            } else {

                return view('buyer.profile', compact("users"));
            };
        }
        return redirect("/login");
    }


    public function buyer()
    {


        $users = Auth::user();

        if (Auth::check()) {

            return view('buyer.profile', compact("users"));
        }
        return redirect("/login");
    }
    // 

    public function MyItem()
    {

        // $images = DB::table('products')->where('products.id', $id)
        // ->join('images', 'images.product_id', '=', 'products.uniqueId')->get();
        $products = DB::table('products')->where("products.user_id", Auth::id())->get();





        return view('MyItem', compact('products'));
    }


    public function EditPicture()
    {
        $users = Auth::user();
        return view('EditProfile', compact('users'));
    }





    public function UpdateProfile(Request $request)
    {


       

        
        $user = Auth::user();
        $user->name = request('name');
        $user->mobile = request('phone');
        $user->bank_acc = request('bank_acc') == '' ? "null" : request('bank_acc');
        $user->bank_name = request('bank_name') == '' ? "null" : request('bank_name');
        $user->bank_no = request('bank_no') == '' ? "null" : request('bank_no');
        $user->delivery_address = request('delivery_address')==''?"null" : request('delivery_address');


        if ($request->hasFile('profile_picture')) {
            $file = $request->file('profile_picture');
            $imageName = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path('/profile_picture/'), $imageName);
            // Storage::disk('public')->put($imageName, 'adaadfd');

            $user->picture = $imageName;


            $user->save();
            return back()->with('success', 'Profile Updated Successfully!');
        }


        $user->save();

        return back()->with('success', 'Profile Updated Successfully!');
    }
}
