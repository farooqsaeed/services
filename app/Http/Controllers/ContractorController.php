<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contractor;
use App\Models\Document;
use App\Models\Group;
use Illuminate\Support\Facades\Auth;

class ContractorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contractors = Contractor::orderBy('id', 'DESC')->get();
        return view('contractors.contractors', compact(['contractors']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Group::orderby('id', 'DESC')->get();
        return view('contractors.add', compact(['groups']));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = auth()->user();
        $path = null;
        $path1 = null;
        if ($request->hasFile('attachment')) {
            $image = $request->attachment;
            $name = time();
            $file = $image->getClientOriginalName();
            $extension = $image->extension();
            $ImageName = $name . $file;
            $fileName = md5($ImageName);
            $fullPath =  $fileName . '.' . $extension;
            $image->move(public_path('upload/image/'), $fullPath);
            $path = 'upload/image/' . $fullPath;
        }

        if ($request->hasFile('attachment1')) {
            $image = $request->attachment1;
            $name = time();
            $file = $image->getClientOriginalName();
            $extension = $image->extension();
            $ImageName = $name . $file;
            $fileName = md5($ImageName);
            $fullPath =  $fileName . '.' . $extension;
            $image->move(public_path('upload/image/'), $fullPath);
            $path1 = 'upload/image/' . $fullPath;
        }
        Document::create([
            'title' => $request->title,
            'description' => $request->description,
            'achieved_date' => $request->achieved_date,
            'expiry_date' => $request->expiry_date,
            'doc_type' => $request->doc_type,
            'user_id' => $user->id,
            'attachment' => $path
        ]);
        Document::create([
            'title' => $request->title1,
            'description' => $request->description1,
            'achieved_date' => $request->achieved_date1,
            'expiry_date' => $request->expiry_date1,
            'doc_type' => $request->doc_type1,
            'user_id' => $user->id,
            'attachment' => $path1
        ]);
        Contractor::create($request->all());
        return redirect("/contractors")->with(['success', 'Contractor added successfully']);
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
        //
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
        $contractor = Contractor::find($id)->first();
        $contractor->delete();
        return redirect()->back();
    }
}
