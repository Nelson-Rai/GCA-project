<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\ORderItem;
use App\Models\User;
use Illuminate\Support\Facades\Auth;    

class CheckoutController extends Controller
{
    public function index(){
        $order_id = session('order_id',0);
            $order = Order::find($order_id);
            $orderitem = OrderItem::whereOrderId($order_id)->get();
            $user_id = Auth::id();
            $user = User::find($user_id);
            return view('Cart.checkout', compact('orderitem', 'order', 'user'));
        
    }
}
