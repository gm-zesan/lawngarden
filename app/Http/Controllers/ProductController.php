<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $product;

    public function index()
    {
        return view('admin.product.index',
        ['categories'=>Category::all(), 
        'subCategories'=>SubCategory::all(),
        'units'=>Unit::all()]);
    }

    public function create(Request $request){
        $this->product = Product::newProduct($request);
        return back()->with('message','Product info create successfully');
    }

    public function manage(){
        return view('admin.product.manage',['products'=>Product::with('unit')->get()]);
    }


    public function detail($id){
        return view('admin.product.detail',['product'=>Product::find($id)]);
    }

    public function edit($id){
        return view('admin.product.edit',
        ['product'=>Product::find($id),
        'categories'=>Category::all(), 
        'subCategories'=>SubCategory::all(),
        'units'=>Unit::all()]);
    }
    

    public function update(Request $request, $id){
        Product::updatedProduct($request,$id);
        return redirect('/product/manage')->with('message','Product info update successfully');
    }


    public function delete($id){
        Product::deletedProduct($id);
        return redirect('/product/manage')->with('message','Product delete successfully');
    }


    public function getSubCategoryByCategory(){
        $subCategories = SubCategory::where('category_id',$_GET['id'])->get();
        return response()->json($subCategories);
    }
    
}
