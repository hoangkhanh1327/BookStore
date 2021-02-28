<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Cart;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class CartController extends Controller
{
    //
    public function __construct()
    {
    }

    public function index()
    {
        $cartContent = [];

        foreach(Cart::content() as $key => $value)
        {
            $cartContent[$value->id] = Book::getBookById($value->id);
        }

        return view('shopping_cart', [
            'cartContent' => $cartContent
        ]);
    }

    public function add(Request $request)
    {
        $book = Book::select(['id', 'name', 'price', 'book_image', 'quantity', 'saleoff'])->find(['id' => $request->book_id]);

        if(!isset($book))
        {
            return "Có lỗi xảy ra.";
        }
        
        if($book[0]->quantity < $request->qant[2]){
            return "Sách còn lại không đủ.";
        }

        Cart::add([
            'id' => $book[0]->id,
            'name' => $book[0]->name,
            'qty' => (int)$request->quant[2],
            'price' => $book[0]->price,
            'options' => ['book_image' => $book[0]->book_image]
        ]);

        return redirect()->route('cart_index');
    }

    public function updateCart(Request $request)
    {
        foreach($request->rowIds as $rowId => $qty){
            $id = Cart::get($rowId)->id;
            $book = Book::select('quantity')->find($id);
            if($book->quantity < $qty)
            {
                return "Số lượng sách còn lại không đủ.";
            }
            Cart::update($rowId, $qty);
        }
        return redirect()->route('cart.index');
    }

    public function destroy($id)
    {
        Cart::remove($id);
        return redirect()->back();
    }
}
