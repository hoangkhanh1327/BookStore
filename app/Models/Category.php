<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function books()
    {
        return $this->hasMany(Book::class);
    }

    // Lấy danh sách thể loại theo parentId
    public static function getCategoriesByParentId($parenId)
    {
        // Trả về danh sách gồm id và tên thể loại
        return Category::where('parent_id', $parenId)->get();
    }

    public static function getCategories()
    {
        // Lấy danh mục lớn
        $parentCate = Category::getCategoriesByParentId(0);
        
        // Lấy danh mục con
        $childCate = [];
        foreach($parentCate as $cate)
        {
            $childCate[$cate->name] = Category::getCategoriesByParentId($cate->id);
        }

        return $childCate;
    }
}