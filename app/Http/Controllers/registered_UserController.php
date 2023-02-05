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
        $check=$request->all();

        $check=$request->validate([
                   'email' => 'required|email|max:40',
                   'password' => 'required|max:40'
                   ]);
        if(Auth::guard('registered_User')->attempt(['email' => $check['email'],'password'=>$check['password']])){


            return redirect()->route('registeredUser.dashboard')->with('success','welcome');
            }
            else{
                return back()->with('failed','Invalid Email or Password');
            }

}

//     public function login(Request $request){
//         if(Auth::guard('registered_User')){
//      $request->validate([
//        'email' => 'required|email|max:40',
//        'password' => 'required|max:40'
//        ]);
//        $email= $request->input('email');
//        $password= $request->input('password');

//        $query=registered_User::where('email','=',$email)->first();

//        if($query){
//        if(Hash::check($password,$query->password)){

//         return redirect()->route('registeredUser.dashboard')->with('success','welcome');
//        }
//        else{

//         return back()->with('failed','Password Error');
//        }
//     }
//     else{
//         return back()->with('failed','Email does not exist');
//     }
// }
//     }

    public function dashboard(Request $request){

            return view('dashboard');

        }

        public function logout(){

            Auth::guard('registered_User')->logout();
            return redirect()->route('registeredUser.login');
        }
    }


