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
        $jobs = Job::all();
        // return $jobs;
        return view('jobs.index', compact(['jobs']));
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

        $path = null;
        if ($request->hasFile('attachment')) {
            $image = $request->attachment;
            $name = time();
            $file = $image->getClientOriginalName();
            $extension = $image->extension();
            $ImageName = $name . $file;
            $fileName = md5($ImageName);
            $fullPath =  $fileName . '.' . $extension;
            $image->move(public_path('upload/Image/'), $fullPath);
            $path = 'upload/Image/' . $fullPath;
        }

        Job::create([
            'address' => $request->address,
            'tenant_name' => $request->tenant_name,
            'contact' => $request->contact,
            'description' => $request->description,
            'subject' => $request->subject,
            'case_no' => "1",
            'property_id' => $request->property_id,
            'category' => $request->category,
            'subCategory' => $request->subcategory,
            'notes' => "nothing to ",
            'job_time' => date('h:m'),
            'job_date' => date('Y:m:d'),
            'landloard_id'=>null,
            'show_to_landloard'=>0,
            'landloard_approvel'=>'Pending',
            'attachment' => $path
        ]);
        return redirect('/jobs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = Job::findorFail($id);
        $property = Property::where('property_id', '=', $job->property_id)->first();
        // return $property;
        return view('jobs.show', compact(['job', 'property']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = Job::findorFail($id);
        return view('jobs.edit', compact(['job']));
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
            "address" => $request->address,
            "tenant_name" => $request->tenant_name,
            "contact" => $request->contact,
            "description" => $request->description,
            "subject" => $request->subject,
        ];
        Job::where('id', $id)->update($update);
        return response()->json(['result' => 'Tenant updated  Successfully!']);
    }


    public function update_landlord($id)
    {   
        $update = [
            'landloard_id' => null,
            'show_to_landloard' => 1,
            'landloard_approvel' => 'Sent To Approve',
        ];
        Job::where('id', $id)->update($update);

        return redirect()->back();
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
