<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;
    protected $table = 'slides';

    public $timestamps = true;

    // Trả về những Ads đang được áp dụng (status = 1)
    public static function getAll()
    {
        return Slide::where('status', '=', 1)->get();
    }
}
