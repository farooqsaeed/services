<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Tenant;
use App\Models\landlord;
use App\Models\tenant_property;
use App\Models\Job;
use App\Models\UniqueId;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $property = Property::orderBy('id', 'DESC')->get();
        return view('property.index', compact(['property']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('property.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $create_property = [
            'property_id' => random_int(100000, 900000),
            'first_line_address' => $request->first_line_address,
            'second_line_address' => $request->second_line_address,
            'Town' => $request->Town,
            'house_no' => $request->house_no,
            'country' => $request->country,
            'Postcode' => $request->Postcode,

            'Notes' => $request->Notes,
            'status' => 'pending',
            'group_id' => 1,
            'group_name' => 1,
            'group_type' => 1
        ];
        $Property = Property::create($create_property);

        // landlord
        if (!empty($request->full_name1[0])) {
            foreach ($request->full_name1 as $key => $name) {
                $create_landlord = [
                    'property_id' => $Property->property_id,
                    'full_name' => $name,
                    'email' => $request->email1[$key],
                    'contact_no' => $request->contact_no[$key],
                ];
                $landlord = landlord::create($create_landlord);
            }
        }

        if (!empty($request->full_name[0])) {
            foreach ($request->full_name as $key => $name) {
                // tenant add
                $Tenant = new Tenant;
                $Tenant->first_name = $request->full_name[$key];
                $Tenant->last_name = '';
                $Tenant->mobile_no = 0;
                $Tenant->email = $request->email[$key];
                $Tenant->house_no = '';
                $Tenant->street_name = '';
                $Tenant->town = '';
                $Tenant->postal_code = '';
                $Tenant->save();

                // tenant_property add
                $tenant_property = new tenant_property();
                $tenant_property->tenancy_start_date = $request->tenancy_start_date[$key];
                $tenant_property->tenancy_last_date = $request->tenancy_last_date[$key];
                $tenant_property->tenant_id = $Tenant->id;
                $tenant_property->property_id = $Property->property_id;
                $tenant_property->IsExpired = 'active';
                $tenant_property->save();
            }
        }

        UniqueId::create([
            'uid' => $Property->property_id,
            'usertype' => 'Tenant',
            'property_id' => $Property->id,
            'grouptype' => null,
        ]);
        return response()->json(['result' => 'Property has been added!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return $id;
        $property = Property::where('id', $id)->first();
        $landlord = landlord::where('property_id', $property->property_id)->first();
        $tenant_property = tenant_property::where('property_id', $property->property_id)->get();

        foreach ($tenant_property as $item) {
            $new = Tenant::where('id', $item->tenant_id)->first();
            if (!empty($new)) {
                $item->detail = $new;
            } else
                return 'tenant not availible';
        }


        $jobs = Job::where('property_id', $property->property_id)->get();
        return view('property.show', compact(['property', 'landlord', 'tenant_property', 'jobs']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $property = Property::where('id', $id)->first();

        if (!empty($property)) {
            return view('property.edit', compact(['property']));
        } else {
            return redirect()->back()->with('error', 'record not found');
        }
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
            "first_line_address" => $request->first_line_address,
            "second_line_address" => $request->last_line_address,
            "Town" => $request->Town,
            "Postcode" => $request->Postcode,
            "Notes" => $request->Notes,

        ];
        Property::where('id', $id)->update($update);
        return response()->json(['result' => 'Property updated  Successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $property = Property::findorFail($id);
        $tenant_property = tenant_property::where('property_id', $property->property_id)->first();
        $jobs = Job::where('property_id', $property->id)->get();
        foreach ($jobs as $job) {
            $job->delete();
        }
        $tenant_property->delete();
        $property->delete();
        return Redirect()->back();
    }

    // multiple delete
    public function delete_proterties(Request $request)
    {
        $ids = $request->ids;
        $order = Property::whereIn('id', $ids);
        $order->delete();
        return response()->json(['success' => "contractors have been deleted "]);
    }
    
    // update status
    public function updateStatus(Request $request, $id)
    {
        $update = [
            "status" => $request->status,
        ];
        Property::where('id', $id)->update($update);
        return redirect("/property")->with(['success', 'Status updated successfully']);
    }
}
