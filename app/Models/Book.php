<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Book extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function inventory()
    {
        return $this->belongsTo(Inventory::class);
    }

    public static function getAllBook()
    {
        return DB::table('books')
                ->select(['books.*', 'author_name', 'categories.name as category_name'])
                ->leftJoin('categories', 'books.category_id', 'categories.id')
                ->leftJoin('authors', 'books.author_id', 'authors.id')
                ->orderBy('books.id')
                ->get();
    }

    public static function getBookById($book_id)
    {
        return DB::table('books')
                ->leftJoin('authors', 'books.author_id', 'authors.id')
                ->where('books.id', $book_id)
                ->get(['books.*', 'author_name']);
    }

    // Get books by parent category_id
    public static function getBooksByCategory($categoryId = 0, $number = 999)
    {
        return DB::table('books')
                ->leftJoin('categories', 'books.category_id', '=', 'categories.id')
                ->leftJoin('authors', 'books.author_id', '=', 'authors.id')
                ->where('parent_id', '=', $categoryId)
                ->orderByDesc('books.publish_date')
                ->limit($number)
                ->get(['books.*', 'author_name']);
    }

    // Get books which is suggested
    public static function getSuggestedBooks()
    {
        return Book::where('is_suggested', 1)->get();
    }

    // Get books which is published recently
    public static function getNewestBooks()
    {
    }

    // Get books which is bought most
    public static function getHotBooks()
    {
    }

    public static function getBookByKey($search)
    {
        return  DB::select("SELECT b.id as bookId,
                                    count(comments.id) as 'totalComment',
                                    b.name,
                                    b.book_image,
                                    b.quantity,
                                    b.price,
                                    a.author_name,
                                    a.id as author_id,
                                    b.saleoff
                            FROM books as b
                            LEFT OUTER JOIN comments  as comments
                            ON b.id=comments.book_id
                            LEFT OUTER JOIN authors  as a
                            ON a.id=b.author_id
                            WHERE b.name LIKE '%$search%' OR a.author_name LIKE '%$search%'
                            GROUP BY b.id,
                                    b.name,
                                    b.book_image,
                                    b.quantity,
                                    b.price,
                                    a.author_name,
                                    a.id,
                                    b.saleoff
                        ");
    }
}
