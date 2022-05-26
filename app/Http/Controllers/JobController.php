<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Property;
use App\Models\landlord;
use App\Models\Category;
use App\Models\Subcategory;
use Carbon;
// use App\Models\Category;


class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('jobs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name')->get();
        $properties = Property::orderBy('id', 'desc')->get();
        return view('jobs.add', compact(['properties', 'categories']));
    }

    public function fetchSub(Request $request)
    {
        $data['states'] = Subcategory::where("category_id", $request->country_id)->get(["name", "id"]);
        return response()->json($data);
    }


    public function landlord()
    {
        return view('jobs.landlord');
    }

    public function destroylandlord($id)
    {
        $landlord = landlord::find($id)->first();
        $landlord->delete();
        return redirect()->back();
    }

    public function assignengineer()
    {
        return view('jobs.assignengineer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $Job = Job::create($request->all());
        $Job = new Job();
        $Job->address = $request->address;
        $Job->tenant_name = $request->tenant_name;
        $Job->contact = $request->contact;
        $Job->description = $request->description;
        $Job->subject = $request->subject;

        $Job->case_no = "1";
        $Job->property_id = "2";
        $Job->category = $request->category;
        $Job->subCategory = $request->subcategory;
        $Job->notes = "nothing to ";
        $Job->job_time = date('h:m');
        $Job->job_date= date('Y:m:d');

        if ($image = $request->file('attachment')) {
            $imageDestinationPath = 'uploads/Images';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imageDestinationPath, $postImage);
            $Job['attachment'] = "$postImage";
        }
        

        $Job->save();   
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('jobs.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('jobs.edit');
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
        //
    }
}
