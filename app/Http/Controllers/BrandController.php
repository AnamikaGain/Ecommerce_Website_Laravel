<?php
namespace App\Http\Controllers;
use App\brand;
use Illuminate\Http\Request;
use DB;
class BrandController extends Controller
{
    public function index()
    {
        return view('admin.add_manufacture');
    }

    public function SaveBrand(Request $request)
    {

        $data=array();
        $data['id']=$request->id;
        $data['brand_name']=$request->brand_name;
        $data['brand_description']=$request->brand_description;
        $data['publication_status']=$request->publication_status;
        DB::table('brands')->insert($data);
        return Redirect('/add-brand')-> with ('message','Category info save successfully');
    }

    public function allBrand()
    {


        $all_brand_info=DB::table('brands')->get();
        $manage_brand=view('admin.all_brand')
            ->with('all_brand_info',$all_brand_info);
        return view('admin_layout')
            ->with('admin.all_brand',$manage_brand);
    }
}
