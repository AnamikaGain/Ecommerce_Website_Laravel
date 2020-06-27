<?php

namespace App\Http\Controllers;

use App\brand;
use App\category;
use App\product;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    public function index()
    {
      $categories = category::where ('status',1)->get ();
      $brands= brand::where ('publication_status',1)->get();
        return view('admin.add_product',[
        'categories'=>$categories,
        'brands'=>$brands,]);
    }

    public function all_product()
    {
        $all_product_info=DB::table('products')
            ->join('categories','products.category_id','=','categories.id')
            ->join('brands','products.brand_id','=','brands.id')
            ->select('products.*','categories.id','brands.id')
            ->get();

        //   echo "<pre>";
        // print_r($all_product_info);
        //   echo "</pre>";
        //   exit();
        $manage_product=view('admin.all_product')
            ->with('all_product_info',$all_product_info);
        return view('admin_layout')
            ->with('admin.all_product',$manage_product);

    }

    public function save_product(Request $request)
    {
        $data=array();
        $data['product_name']=$request->product_name;
        $data['category_id']=$request->category_id;
        $data['brand_id']=$request->brand_id;
        $data['product_short_description']=$request->product_short_description;
        $data['product_long_description']=$request->product_long_description;
        $data['product_price']=$request->product_price;
        $data['product_size']=$request->product_size;
        $data['product_color']=$request->product_color;
        $data['publication_status']=$request->publication_status;
        $image=$request->file('product_image');
        if ($image) {
            $image_name=str_repeat('a',20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if ($success) {
                $data['product_image']=$image_url;
                DB::table('products')->insert($data);
                return Redirect('/add-product');
                // echo "<pre>";
                // print_r($data);
                // echo "</pre>";
                // exit();

            }
        }
        $data['product_image']='';
        DB::table('products')->insert($data);
        return Redirect('/add-product');


    }

    public function unactive_product($product_id)
    {
        DB::table('products')
            ->where('product_id',$product_id)
            ->update(['publication_status' => 0]);
        Session::put('message','Product Unactive successfully !! ');
        return Redirect::to('/all-product');
    }

    public function active_product($product_id)
    {
        DB::table('products')
            ->where('product_id',$product_id)
            ->update(['publication_status' => 1]);
        Session::put('message','Product Active successfully !! ');
        return Redirect::to('/all-product');
    }

    public function delete_product($product_id)
    {

        DB::table('products')
            ->where('product_id',$product_id)
            ->delete();
        Session::get('message','Product Deleted successfully! ');
        return Redirect::to('/all-product');
    }

    public function edit_product($product_id)
    {
        $product_info=DB::table('products')
            ->where('product_id',$product_id)
            ->first();
        $product_info=view('admin.edit_product')
            ->with('product_info',$product_info);
        return view('admin_layout')
            ->with('admin.edit_product',$product_info);
    }

    public function update_product(Request $request,$product_id)
    {
        $data=array();
        $data['product_name']=$request->product_name;
        $data['category_id']=$request->category_id;
        $data['manufacture_id']=$request->manufacture_id;
        $data['product_short_description']=$request->product_short_description;
        $data['product_long_description']=$request->product_long_description;
        $data['product_price']=$request->product_price;
        $data['product_size']=$request->product_size;
        $data['product_color']=$request->product_color;
        $image=$request->file('product_image');
        if ($image) {
            $image_name=str_repeat('a',20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if ($success) {
                // $data['product_image']=$image_url;
                //    DB::table('products')->insert($data);
                //    Session::put('message','Product added successfully!!');
                //    return Redirect::to('/add-product');
                // echo "<pre>";
                // print_r($data);
                // echo "</pre>";
                // exit();

            }else{

            }
        }
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        // DB::table('tbl_manufacture')
        //     ->where('manufacture_id',$manufacture_id)
        //     ->update($data);

        //     Session::get('message','Manufacture update successfully !');
        //     return Redirect::to('/all-manufacture');
    }


}
