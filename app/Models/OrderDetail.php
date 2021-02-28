<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class OrderDetail extends Model
{
    use HasFactory;
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public static function getDetailsByOrderId($order_id)
    {
        return DB::table('order_details')
                    ->leftJoin('books', 'order_details.book_id', 'books.id')
                    ->where('order_id', $order_id)
                    ->get(['order_details.*', 'name']);
    }

    public static function getById($order_id)
    {
        return DB::table('order_details')
            ->leftJoin('books', 'order_details.book_id', 'books.id')
            ->where('order_id', $order_id)
            ->get(['order_details.*', 'name']);
    }
}
