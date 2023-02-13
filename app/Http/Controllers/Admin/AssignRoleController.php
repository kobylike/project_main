<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AssignRoleController extends Controller
{
    public function index(){

        // $users=User::all();
        $users=User::whereNotIn('name', ['admin'])->get();
        $roles=Role::all();
        return view('Pages.admin.users.index',compact('users','roles'));
    }

    public function giveUserRole(User $user,Request $request){

        $user->assignRole($request->role);
        return back()->with('success','User Assigned to role Successfully');
    }

    public function status($id){


        $query=User::where('id','=',$id)->first();

        if($query->status=='1'){
            $status=0;
        }
        else{
            $status=1;
        }

       User::where('id','=',$id)->update([

            'status'=>$status
        ]);

        if($query->status=='0`'){
            return back()->with('success','User  Deactivated');
        }
        return back()->with('success','Employee Activated');
    }
}
