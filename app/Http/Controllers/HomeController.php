<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Slide;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $slides = Slide::getAll();
        $categories = Category::getCategories();
        $authors = Author::all();

        $books = [];
        
        foreach(Category::getCategoriesByParentId(0) as $key => $value)
        {
            $books[$value->name] = Book::getBooksByCategory($value->id);
        }

        return view('index', [
            'slides' => $slides,
            'categories' => $categories,
            'authors' => $authors,
            'books' => $books
        ]);
    }

    public function follow_order()
    {
        $orders = Order::getOrdersByUserId(Auth::id());

        $order_details = array();
        foreach($orders as $order)
        {
            $order_details[$order->id] = OrderDetail::getDetailsByOrderId($order->id);
        }

        return view('components.front-end.order_follow', [
            'orders' => $orders,
            'order_details' => $order_details
        ]);
    }
}
