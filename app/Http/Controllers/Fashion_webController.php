<?php

namespace App\Http\Controllers;
use App\category;
use App\product;
use Illuminate\Http\Request;
use DB;

class Fashion_webController extends Controller
{
    public function index()
    {
        $categories = category::where(['parent_id' => 0])->get();

        $allCategories = category::pluck('name','id')->all();
        $newProducts = product::where ('publication_status', 1)
                                    ->orderBy('product_id', 'DESC')
                                    ->take (8)
                                    ->get();

        return view('front-end.home.home',compact('categories','allCategories','newProducts'));

/*
        foreach($categories as $cat){
        $sub_categories = category::where(['parent_id' => $cat->id])->get();
            foreach($sub_categories as $sub_cat){
             echo $sub_cat->name;
            }
        }

        return view ('front-end.home.home',compact('categories','sub_categories'));
*/
    }


    public function categoryProduct(){
        return view ('front-end.category.category-content');

}


    public function url($url = null)

    {   $categories = category::where(['parent_id' => 0])->get();
        $categoryDetails= category::where (['url'=>$url])->first();
        $newProducts = product:: where (['category_id'=> $categoryDetails ->id ])->get();
        return view ('front-end.category.Categories',compact('newProducts','categories' ,'categoryDetails' ));
    }
    public function showProduct($product_id = null)
    {   $categories = category::where(['parent_id' => 0])->get();
        $ProductDetails = product:: where (['product_id'=> $product_id ])->first();
        $ProductDetails =json_decode(json_encode($ProductDetails));
        return view ('front-end.product.productDetails',compact( 'ProductDetails','categories' ));

    }

}
