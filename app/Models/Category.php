<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    private static $category;

    protected $fillable = [
        'name',
        'description',
    ];

    public static function newCategory($request){
        self::$category = new Category();
        self::$category->name = $request->name;
        self::$category->description = $request->description;
        self::$category->save();
    }


    public static function updatedCategory($request, $id){
        self::$category = Category::find($id);
        self::$category->name = $request->name;
        self::$category->description = $request->description;
        self::$category->save();
    }


    public static function deletedCategory($id){
        self::$category = Category::find($id);
        self::$category->delete();

    }

    public function subCategories(){
        return $this->hasMany(SubCategory::class);
    }
    public function products(){
        return $this->hasMany(Product::class);
    }
}
