<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        "sao lại về đây";
    }

    public function create()
    {
        return view('checkout');
    }

    public function store(Request $request)
    {
        $token = $request->_token.time();
        $fee = (Cart::total() >= 20000) ? 0 : 20000;
        
        $order = new Order;
        $order->user_id = Auth::id();
        $order->order_status = 'Đơn hàng đang được xử lý';
        $order->shipping_address = $request->address;
        $order->phone_receiver = $request->phone;
        $order->name_receiver = $request->name;
        $order->shipping_fee = $fee;
        $order->total_cost = Cart::total() + $fee;

        $order->save();

        foreach(Cart::content() as $item)
        {
            $book = Book::find($item->id);

            $book->quantity = $book->quantity - $item->qty;

            $book->save();

            $order_detail = new OrderDetail;
            
            $order_detail->order_id = $order->id;

            $order_detail->book_id = $item->id;

            $order_detail->price = $item->price;

            $order_detail->quantity = $item->qty;

            $order_detail->save();
        }

        Cart::destroy();

        return redirect()->route('home');
    }
}
