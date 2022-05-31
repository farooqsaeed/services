<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Subgroup;
use App\Models\Childgroup;


class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Groups= Group::with('subgroup')->get();
        // return
        // $Groups;
         return view('groups.groups',compact(['Groups']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('groups.add');
    }
    // sub group
    public function subgroupcreate()
    {
        return view('groups.addsubgroup');
    }

    // child group
    public function childgroupcreate()
    {
        return view('groups.addchildgroup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Group = Group::create($request->all());
        return response()->json(['result' => 'Record Inserted!']);
    }

    // sub
    public function subgroupstore(Request $request)
    {
        $Group = Subgroup::create($request->all());
        return response()->json(['result' => 'Record Inserted!']);
    }

    // child group
    public function childgroupstore(Request $request)
    {
        $Group = Childgroup::create($request->all());
        return response()->json(['result' => 'Record Inserted!']);
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
    public function edit($id)
    {   
        $group = Group::findorFail($id);
        return view('groups.edit-group', compact(['group']));
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
        $update = [
            "Group_Name" => $request->Group_Name,
        ];
        Group::where('id', $id)->update($update);
        return response()->json(['result' => 'Tenant updated  Successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $group=Group::find($id)->first();
        $group->delete();
        return redirect()->back();
    }
}
