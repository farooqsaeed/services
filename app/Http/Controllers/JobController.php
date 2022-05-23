<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Property;
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
        // $categories= Category::orderBy('id', 'desc')->get();
        $properties=Property::orderBy('id','desc')->get();
        return view('jobs.add',compact(['properties']));
    }

    public function landlord()
    {
        return view('jobs.landlord');
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
        // return response()->json(['result' => 'Record Inserted!']);


        $Job = new Job;
        $Job->address = $request->address;
        $Job->tenant_name = $request->tenant_name;
        $Job->contact = $request->contact;
        $Job->attachment = $request->attachment;
        $Job->description = $request->description;
        $Job->subject = $request->subject;

        $Job->case_no = "1";
        $Job->property_id = "2";
        $Job->severity = "2";
        $Job->payment_status = "Pending";
        $Job->category = "2";
        $Job->subCategory = "2";
        $Job->status = 'Pending';
        $Job->notes = "nothing to ";
        $Job->job_time =$Job->created_at;
        $Job->job_date =$Job->created_at;
         
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
