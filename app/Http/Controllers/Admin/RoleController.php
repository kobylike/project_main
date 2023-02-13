<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function givePermission(Request $request,Role $role){

        if($request->permission){
            $role->hasPermissionTo($request->permission);
            return back()->with('success','Permission Exist');
        }

        $role->givePermissionTo($request->permission);


        return back()->with('success','Permission Assigned to role Successfully');

     }

    public function index()
    {

        $permissions=Permission::all();
        $roles= Role::whereNotIn('name', ['admin'])->latest()->paginate(5);
        // $roles= Role::whereNotIn('name', ['admin'])->get();
            //  $roles= Role::latest()->paginate(5);

        return view('Pages.admin.roles.index',compact('roles','permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pages.admin.roles.create-role');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate([
            'role_name'=>'required '

        ]);

        $role_name=$request->input('role_name');

        $request=new Role();
        $request->name=$role_name;
        $request->save();
        if($request){

            return back()->with('success','Role Added Successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $permissions=Permission::all();
        return view('Pages.admin.roles.edit-role',compact('role','permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $validated=$request->validate((['name'=>'required']));
        $role->update($validated);
        return to_route('admin roles.index')->with('Role Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {

        $query=$role->delete();
        if($query){
                return back()->with('success','Role deleted Sucessfully');
        }
    }
}
