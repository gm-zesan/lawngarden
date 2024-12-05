<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'location',
        'description',
        'start_date',
        'image',
        'status',
    ];

    public static function getImageUrl($request){
        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $directory = 'upload/projects-image/';
        $image->move($directory, $imageName);
        $imageUrl = $directory.$imageName;
        return $imageUrl;
    }
}
