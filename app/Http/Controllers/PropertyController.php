<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Tenant;
use App\Models\landlord;
use App\Models\tenant_property;
use App\Models\Job;




class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $property = Property::orderby('id', 'DESC')->get();
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
         $Property = new Property;
        $Property->property_id = random_int(10000, 90000);
        $Property->first_line_address = $request->first_line_address;
        $Property->second_line_address = $request->second_line_address;
        $Property->Town = $request->Town;
        $Property->Notes = $request->Notes;
        $Property->Postcode = $request->Postcode;
        $Property->status = 'active';
        $Property->group_id = 1;
        $Property->group_name = 1;
        $Property->group_type = 1;
        $Property->save();

        // landlord
        $landlord = new landlord;
        $landlord->property_id = $Property->property_id;
        $landlord->full_name = $request->full_name;
        $landlord->email = $request->email;
        $landlord->contact_no = $request->contact_no;
        $landlord->save();

        if ($request->check_box =='on') {

        // tenant add
        $Tenant = new Tenant;
        $Tenant->first_name = $request->first_name;
        $Tenant->last_name = $request->last_name;
        $Tenant->mobile_no = 0;
        $Tenant->email = $request->email;
        $Tenant->house_no = $request->house_no;
        $Tenant->street_name = $request->street_name;
        $Tenant->town = $request->town;
        $Tenant->postal_code = $request->postal_code;
        $Tenant->save();

        // tenant_property add
        $tenant_property = new tenant_property();
        $tenant_property->tenancy_start_date = $request->tenancy_start_date;
        $tenant_property->tenancy_last_date = $request->tenancy_last_date;
        $tenant_property->tenant_id = $Tenant->id;
        $tenant_property->property_id = $Property->property_id;
        $tenant_property->IsExpired = 'active';
        $tenant_property->save();
        }
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
        $property = Property::where('id', $id)->first();
        $landlord = landlord::where('property_id', $property->property_id)->first();
        $tenant_property = tenant_property::where('property_id', $property->property_id)->get();

        foreach ($tenant_property as $item) {
            $item->detail = Tenant::where('id', $item->tenant_id)->first();
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
        return view('property.edit', compact(['property']));
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
        $property->delete();
        return Redirect()->back();
    }
}
