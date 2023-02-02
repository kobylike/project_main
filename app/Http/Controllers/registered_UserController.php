<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registered_User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class registered_UserController extends Controller
{
    //



    public function register(){

        return view('Pages.registeredUsers.registeredUser-signup');
    }

    public function signin(){

        return view('Pages.registeredUsers.registeredUser-signin');
    }

    public function store(Request $request) {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);
        registered_User::create([
          'name' => $request->input('name'),
          'email' => $request->input('email'),
          'password' => bcrypt($request->input('password'))
          ]);

          return redirect()->back()->with('success','Register Successfuly');

    }

    public function login(Request $request){
     $request->validate([
       'email' => 'required|email|max:40',
       'password' => 'required|max:40'
       ]);
       $email= $request->input('email');
       $password= $request->input('password');

       $query=registered_User::where('email','=',$email)->first();

       if($query){
       if(Hash::check($password,$query->password)){

        return redirect('/blog')->with('success','welcome');
       }
       else{

        return back()->with('failed','Password Error');
       }
    }
    else{
        return back()->with('failed','Email does not exist');
    }


    }

    public function dashboard(Request $request){

        $registeredUser=registered_User::all();
        if($registeredUser->id && $request->url()!==url('/blog')){

                dd($registeredUser);
            return view('Pages.Blog.blog',compact('registeredUser'));

        }
    }

}
