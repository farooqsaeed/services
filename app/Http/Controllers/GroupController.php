<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Subgroup;
use App\Models\Childgroup;
use App\Models\UniqueId;
use Illuminate\Support\Facades\DB;


class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Groups = Group::orderBy('Id', 'DESC')->with('subgroup')->get();
        $items = DB::table('groups')->get();
        foreach ($items as $item) {
            $lists = DB::table('subgroups')->where('group_id', '=', $item->id)->get();
            $item->subgroups = $lists;
            foreach ($lists as $list) {
                $list->childs = DB::table('childgroups')->where('subgroup_id', '=', $list->id)->get();
            }
        }

        return view('groups.groups', compact(['Groups', 'items']));
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
        } else {
            return 'Sorry not avalible';
        }
    }

    // child group
    public function childgroupcreate($id)
    {
        $group = Subgroup::findorFail($id);
        if (!empty($group)) {
            return view('groups.addchildgroup', compact(['group']));
        } else {
            return 'Sorry not avalible';
        }
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

        Childgroup::create([
            'Child_Group_Name' => $request->Child_Group_Name,
            'Child_Group_ID' => random_int(10000, 90000),
            'subgroup_id' => $request->subgroup_id,
        ]);

        return response()->json(['result' => 'Sub group added succesfully!']);
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
        $subgroup = Subgroup::where('group_id', '=', $id)->first();
        $childgroup = Childgroup::where('subgroup_id', '=', $subgroup->id)->first();

        $group->delete();
        $childgroup->delete();
        $subgroup->delete();

        return redirect()->back();
    }


    public function destroySubgroup($id)
    {
        $group = Subgroup::findorFail($id);
        $group->delete();
        $subgroup = Childgroup::where('subgroup_id', '=', $id)->first();
        if ($subgroup) {
            $subgroup->delete();
            return redirect()->back();
        }
        return redirect()->back();
    }
}
