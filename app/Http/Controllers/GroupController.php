<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Subgroup;
use App\Models\Childgroup;
use App\Models\UniqueId;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Groups = Group::orderBy('Id','DESC')->with('subgroup')->get();
        //   return $Groups;
         return view('groups.groups', compact(['Groups']));
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
    public function subgroupcreate($id)
    {
        $group = Group::where('id', $id)->first();
        if (!empty($group)) {
            return view('groups.addsubgroup', compact(['group']));
        }
        else
        {
            return 'Sorry not avalible';
        }
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
        // $Group = Group::create($request->all());

        // Group::create([
        //     'Group_Name' => $request->Group_Name,
        //     'Group_ID' => random_int(10000, 90000)
        // ]);
        $group = new Group();
        $group->Group_Name = $request->Group_Name;
        $group->Group_ID = random_int(100000, 900000);
        $group->save();

        UniqueId::create([
            'uid' => $group->Group_ID,
            'usertype' => 'Contractor',
            'property_id' => $group->id,
            'grouptype' => 'group',
        ]);

        return response()->json(['result' => 'Group added!']);
    }

    // sub
    public function subgroupstore(Request $request)
    {
        Subgroup::create([
            'Sub_Group_Name' => $request->Sub_Group_Name,
            'Sub_Group_ID' => random_int(10000, 90000),
            'group_id' => $request->group_id,
        ]);
        return response()->json(['result' => 'Sub group added succesfully!']);
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
        $group = Group::findorFail($id);
        $group->delete();
        return redirect()->back();
    }
}
