<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use App\Models\UniqueId;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $arrayName = array('Farooq', 'Mardan');
        // $collection = collect($arrayName)->map(function ($name) {
        //     return strtoupper($name);
        // })->reject(function ($name) {
        //     return empty($name);
        // });
        // return $collection;
        $users = User::orderby('id', 'DESC')->get();
        return view('user.index', compact(['users']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::orderBy('id', 'DESC')->get();
        return view('user.add', compact(['roles']));
    }

    public function change_password()
    {
        return view('user.changepassword');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $PermissionArray  = array(
            $request->read_property,
            $request->write_property,
            $request->read_tenant,
            $request->write_tenant,
            $request->read_users,
            $request->write_users,
            $request->read_groups,
            $request->write_groups,
            $request->read_jobs,
            $request->write_jobs,
            $request->read_engineer,
            $request->write_engineer
        );

        $role = Role::where('slug', '=', $request->role)->first();
        $Permission = Permission::whereIn('slug', $PermissionArray)->get();
        // $uid = UniqueId::where('grouptype', '=', $request->grouptype)->where('property_id', '=', $request->property_id)->first();

        // if (!empty($uid)) {

        // }
         $User = new User;
        $User->name = $request->name;
        $User->email = $request->email;
        $User->unique_id = 123;
        $User->group_name = $request->group;
        $User->user_type = $request->role;
        $User->password = bcrypt($request->password);
        $User->save();
        $User->roles()->attach($role);
        $User->permissions()->attach($Permission);
        return 'added';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('id', $id)->first();
        return view('user.show', compact(['user']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        return view('user.edit', compact(['user']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::where('id', $id)->first();
        $user->delete();
        return redirect()->back();
    }
}
