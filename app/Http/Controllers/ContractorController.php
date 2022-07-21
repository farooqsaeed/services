<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contractor;
use App\Models\Contractor_job;
use App\Models\Document;
use App\Models\Group;
use App\Models\Job;
use App\Models\Property;
use App\Models\tenant_property;
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
        return view('contractors.index', compact(['contractors']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Group::orderby('id', 'DESC')
        ->get();
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
        $tenant_property = tenant_property::where('tenant_id', 27)->get();
        foreach ($tenant_property as $item) {
            $property = Property::where('property_id', $item->property_id)->first();
            if (!empty($property)) {
                $item->detail = $property;
            }
        }

        $contractor=Contractor::findorFail($id);
        return view('contractors.show',compact(['contractor', 'tenant_property']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contractor  = Contractor::findorFail($id);
        return view('contractors.edit', compact(['contractor']));
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
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "email" => $request->email,
            "landline_no" => $request->landline_no,
            "mobile_no" => $request->mobile_no,
            "house_no" => $request->house_no,
            "street_name" => $request->street_name,
            "town_city" => $request->town_city,
            "postal_code" => $request->postal_code,
            "preferred_communication" => $request->preferred_communication,
        ];

        Contractor::where('id', $id)->update($update);
        return response()->json(['result' => 'Contractor updated  Successfully!', 'url' =>  url('contractors')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contractor = Contractor::findorFail($id);
        $contractor->delete();
        return redirect()->back();
    }


    public function updateStatus(Request $request, $id)
    {
        $update = [
            "status" => $request->status,
        ];

        Contractor::where('id', $id)->update($update);
        return redirect("/contractors")->with(['success', 'Status updated successfully']);
    }


    public function assignJob($id)
    {    
        $contractor_id = Contractor::findorFail($id);
        $jobs = Job::all();
         return view('contractors.assign_job', compact(['jobs', 'contractor_id']));
    }

    public function StoreAssignJob(Request $request)
    {   
         $data=[
            'contractor_id'=>$request->contractor_id,
            'job_id' => $request->job_id,
        ];
        Contractor_job::create($data);
        return response()->json(['success' => "Contractors added Successfully "]);

    }

    // multiple delete
    public function delete_contractors(Request $request)
    {
        $ids = $request->ids;
        $order = Contractor::whereIn('id', $ids);
        $order->delete();
        return response()->json(['success' => "contractors have been deleted "]);
    }

}
