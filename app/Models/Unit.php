<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
    private static $unit;


    protected $fillable = [
        'name',
        'description',
    ];



    public static function newUnit($request){
        self::$unit = new Unit();
        self::$unit->name = $request->name;
        self::$unit->description = $request->description;
        self::$unit->save();
    }


    public static function updatedUnit($request, $id){
        self::$unit = Unit::find($id);
        self::$unit->name = $request->name;
        self::$unit->description = $request->description;
        self::$unit->save();
    }


    public static function deletedUnit($id){
        self::$unit = Unit::find($id);
        self::$unit->delete();
    }
}
