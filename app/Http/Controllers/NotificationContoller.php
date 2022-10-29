<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NotificationContoller extends Controller
{
    //
    public function SellerShowNotificaton()
    {
        $notifications =  $products = DB::table('notifications')->get();

        // $notifications =  $products = DB::table('notifications')
        // ->where('notifiable_id', Auth::id())
        // ->get();


        return view('notification.SellerShowNotification', compact('notifications'));
    }


    public function BuyerShowNotificaton()
    {
        $notifications =  $products = DB::table('notifications')->get();

        return view('notification.SellerShowNotification', compact('notifications'));
    }
}
