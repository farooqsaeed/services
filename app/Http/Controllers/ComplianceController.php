<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use App\Models\property_certificate;

class ComplianceController extends Controller
{
    public function electrical($id)
    {
        $property = Property::findorFail($id);
        return view('property.compliance.electrical', compact(['property']));
    }

    public function gas($id)
    {
        $property = Property::findorFail($id);
        return view('property.compliance.gas', compact(['property']));
    }

    public function fire($id)
    {
        $property = Property::findorFail($id);
        return view('property.compliance.fire', compact(['property']));
    }

    public function inspection($id)
    {
        $property = Property::findorFail($id);
        return view('property.compliance.inspection', compact(['property']));
    }

    public function energy($id)
    {
        $property = Property::findorFail($id);
        return view('property.compliance.energy', compact(['property']));
    }


    public function complianceStore(Request $request)
    {
        property_certificate::create($request->all());
        return response()->json(['url' => url('property/'), 'result' => 'certificate added']);
     }
}
