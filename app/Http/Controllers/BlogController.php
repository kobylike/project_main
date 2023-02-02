<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{

    public function __construct(){

        return $this->middleware('auth')->except('index','show');
    }


    public function index(Request $request){
        if($request->input('search')){
            $posts=Post::where('title','like','%'.$request->input('search').'%')->
            orWhere( 'body','like','%'.$request->search.'%')->latest()->paginate(5);
        }
        else if($request->category){
            $posts=Category::where('name','=',$request->category)->firstOrFail()->posts()->paginate(5)->withQueryString();
        }

        else{
             $posts=Post::latest()->paginate(5);
        }
        $categories=Category::all();


        return view('Pages.Blog.blog',compact('posts','categories'));
    }

    public function destroy(Post $post){
        $post->delete();
        if($post){
            return back()->with('success','Post deleted Sucessfully');
        }

    }

    public function update(Request $request ){
        $request->validate([

            'title' => ['required', 'string'],
            'image' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
            'category_id' => 'required',
            'body' => ['required'],
        ]);


        $title=$request->input('title');
        $category_id=$request->input('category_id');
        $id=$request->input('id');
        $slug=Str::slug($title,'-');
        $body=$request->input('body');
        $image='storage/'.$request->file('image')->store('post_images','public');

        $request=new Post();

        $request->title=$title;
        $request->category_id=$category_id;
        $request->slug=$slug;
        $request->body=$body;
        $request->image_path=$image;
        $query=Post::where('id','=',$id)->update([
            'title' =>$title,
            'category_id' =>$category_id,
            'slug' =>$slug,
            'body' =>$body,
            'image_path' =>$image,

        ]);
        if($query){

            return back()->with('success','Post Updated Successfully');
        }



    }

    public function edit(Post $post){
        $categories=Category::all();
        return view('Pages.Blog.edit-post',compact('post','categories'));

    }
    public function create(){
        $categories=Category::all();
        return view('Pages.Blog.create-post',compact('categories'));
    }

    public function store(Request $request){
        $request->validate([

            'title' => ['required', 'string'],
            'image' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
            'category_id' => 'required',
            'body' => ['required'],
        ]);

        $user_id=Auth::user()->id;
        $title=$request->input('title');
        $category_id=$request->input('category_id');
        $slug=Str::slug($title,'-');
        $body=$request->input('body');
        $image='storage/'.$request->file('image')->store('post_images','public');


        $request=new Post();
        $request->user_id=$user_id;
        $request->title=$title;
        $request->category_id=$category_id;
        $request->slug=$slug;
        $request->body=$body;
        $request->image_path=$image;
        $request->save();

        if($request){

            return back()->with('success','Post Added Succesfully');
        }

    }

    public function show(Post $post){

        $category=$post->category;
        $categories=Category::all();
        $relatedPosts=$category->posts()->where('id','!=',$post->id)->latest()->take(4)->get();

        return view('Pages.Blog.blog-detail',compact('post','relatedPosts','categories'));
    }
}
