<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    public function create(){

        return view('Pages.Category.create-category');
    }

    public function index(){

        $categories=Category::all();
        return view('Pages.Category.category-list',compact('categories'));
    }

    public function edit(Category $category){

        return view('Pages.Category.edit-category',compact('category'));
    }

    public function update(Request $request){
        $request->validate([
            'name'=>'required |unique:categories'
        ]);
        $id=$request->input('id');
        $name=$request->input('name');

        $request=new Category();

        $request->name=$name;
        $query=Category::where('id','=',$id)->update([

            'name'=>$name,
        ]);
        if($query){

        return back()->with('success','Updated Successfully');
        }
    }

    public function destroy(Category $category){

        $category->delete();
        if($category){
            return back()->with('success','Category Deleted Successfully');
        }

    }

    public function store(Request $request){

        $request->validate([
            'name'=>'required |unique:categories'
        ]);

        $name=$request->input('name');

        $request=new Category();

        $request->name=$name;
        $request->save();
        if($request){

            return back()->with('success','Category Added');
        }
    }
}
