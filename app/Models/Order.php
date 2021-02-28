<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function order_details(){
        return $this->hasMany(OrderDetail::class);
    }

    public static function getOrdersByUserId($user_id)
    {
        return DB::table('orders')->where('user_id', $user_id)->get();
    }
}
