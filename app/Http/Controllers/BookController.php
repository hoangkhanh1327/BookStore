<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Comment;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index($book_id)
    {
        $book = Book::getBookById($book_id);
        $comments = Comment::where('book_id', $book_id)->get();
        return view('detail', [
            'book' => $book[0],
            'comments' => $comments
        ]);
    }

    public function search(Request $request)
    {
        $result = Book::getBookByKey($request->search_txt);
        $total = count($result);
        
        return view('search', [
            'result' => $result,
            'total' => $total,
            'search' => $request->search_txt
        ]);
    }
}
