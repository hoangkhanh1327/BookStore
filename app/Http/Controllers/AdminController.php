<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');    
    }

    public function index()
    {
        $books = Book::all();
        $profit = 0;
        $orders = Order::all();

        foreach($orders as $order)
        {
            $profit = $profit + $order->total_cost;
        }

        return view('admin.index', [
            'books' => $books,
            'profit' => $profit
        ]);
    }
    
    public function get_accounts()
    {
        $users = User::all();

        return view('admin.account', [
            'users' => $users
        ]);
    }

    public function get_categories()
    {
        $categories = Category::all();

        return view('admin.category', [
            'categories' => $categories
        ]);
    }

    public function get_authors()
    {
        $authors = Author::all();

        return view('admin.author', [
            'authors' => $authors
        ]);
    }

    public function get_books()
    {
        $books = Book::getAllBook();

        return view('admin.book', [
            'books' => $books
        ]);
    }

    public function get_orders()
    {
        $orders = Order::all();

        return view('admin.order', [
            'orders' => $orders
        ]);
    }

    public function get_order_detail($order_id)
    {
        $detail = OrderDetail::getById($order_id);
        $order = Order::find($order_id);

        return view('admin.detail_order', [
            'order' => $order,
            'detail' => $detail
        ]);
    }
}
