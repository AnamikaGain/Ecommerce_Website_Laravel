<?php

namespace App\Http\Controllers;
use App\category;
use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    public function addCategory(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
            $category = new Category;
            $category->name = $data['category_name'];
            $category->parent_id = $data['parent_id'];
            $category->description = $data['description'];
            $category->url = $data['url'];

            $category->save();
            return redirect('/admin/add-categories')->with('message','Category added Successfully!');
        }

        $levels = Category::where(['parent_id'=>0])->get();

        return view('admin.categories.add_category')->with(compact('levels'));
    }

    public function editCategory(Request $request, $id = null){
        if($request->isMethod('post')){
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
            Category::where(['id'=>$id])->update(['name'=>$data['category_name'],'description'=>$data['description'],'url'=>$data['url']]);
            return redirect('/admin/view-categories')->with('flash_message_success','Category updated Successfully!');
        }
        $categoryDetails = Category::where(['id'=>$id])->first();
        $levels = Category::where(['parent_id'=>0])->get();
        return view('admin.categories.edit_category')->with(compact('categoryDetails','levels'));
    }

    public function deleteCategory(Request $request, $id = null){
        if(!empty($id)){
            Category::where(['id'=>$id])->delete();
            return redirect()->back()->with('flash_message_success','Category deleted Successfully!');
        }
    }

    public function viewCategories(){

        if(!empty($id)){
            $products=Category::find($id)->products;
        }
        $categories = category::all();
        return view('admin.categories.view_categories',['categories'=>$categories]);
        //return view('admin.categories.view_categories')->with(compact('categories'));
    }

    public function viewFrontendCategories()
    {
        $categories = category::all();
        return view('front-end.category.Categories')->with(compact('categories'));
    }


}

