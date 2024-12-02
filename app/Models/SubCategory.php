<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    private static $subCategory;

    protected $fillable = [
        'category_id',
        'name',
        'description',
    ];
    


    public static function newSubCategory($request){
        self::$subCategory = new subCategory();
        self::$subCategory->category_id = $request->category_id;
        self::$subCategory->name = $request->name;
        self::$subCategory->description = $request->description;
        self::$subCategory->save();
    }


    public static function updatedSubCategory($request, $id){
        self::$subCategory = subCategory::find($id);
        self::$subCategory->category_id = $request->category_id;
        self::$subCategory->name = $request->name;
        self::$subCategory->description = $request->description;
        self::$subCategory->save();
    }


    public static function deletedSubCategory($id){
        self::$subCategory = subCategory::find($id);
        self::$subCategory->delete();

    }


    public function category(){
        return $this->belongsTo(Category::class);
    }
}
