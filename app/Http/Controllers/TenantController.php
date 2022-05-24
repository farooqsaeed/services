<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenant;
use App\Models\Property;
use App\Models\tenant_property;

use Illuminate\Support\Facades\Redirect;

class TenantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tenants = Tenant::orderby('id', 'DESC')->get();
        return view('tenants.index', compact(['tenants']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tenants.add');
    }

    public function createproperty($id)
    {
        $tenant_id = Tenant::findorFail($id);
        $properties = Property::all();
        return view('tenants.add_property', compact(['properties', 'tenant_id']));
    }
    // store add_property_to_tenant
    public function storeproperty(Request $request)
    {
        $isexpire = 0;
        $startDate = date('Y-m-d', intval("$request->tenancy_start_date"));
        $endDate = date('Y-m-d', intval("$request->tenancy_last_date"));
        if ($startDate <= $endDate) {
            $isexpire = "No";
        } else {
            $isexpire = "Expired";
        }
        $property = Property::findorFail($request->property_id);
        $Tenantproperty = new tenant_property;
        $Tenantproperty->tenant_id = $request->tenancy_id;
        $Tenantproperty->property_id = $request->property_id;
        $Tenantproperty->tenancy_start_date = $request->tenancy_start_date;
        $Tenantproperty->tenancy_last_date = $request->tenancy_last_date;
        $Tenantproperty->IsExpired = $isexpire;
        $Tenantproperty->status = (int)$property->status;;
        $Tenantproperty->save();
        return response()->json(['result' => 'Property is  assign to tenant!']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'mobile_no' => 'required',
            'email' => 'required|max:255',
            'house_no' => 'required',
            'street_name' => 'required',
            'town' => 'required|max:255',
            'postal_code' => 'required',
        ]);
        $Tenant = Tenant::create($request->all());
        return response()->json(['result' => 'Tenant Added  Successfully!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tenant_property = tenant_property::where('tenant_id', $id)->get();

        foreach ($tenant_property as $item) {
            $item->detail = Property::where('property_id', $item->property_id)->first();
        }
        $tenant = Tenant::findorFail($id);
        return view('tenants.show', compact(['tenant', 'tenant_property']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tenant = Tenant::findorFail($id);
        return view('tenants.edit', compact(['tenant']));
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
            "mobile_no" => $request->mobile_no,
            "email" => $request->email,
        ];
        Tenant::where('id', $id)->update($update);
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
        $tenant = Tenant::findorFail($id);
        $tenant->delete();
        return Redirect()->back();
    }
}
