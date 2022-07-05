<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComplianceController extends Controller
{
    public function electrical()
    {
        return view('property.compliance.electrical');
    }

    public function gas()
    {
        return view('property.compliance.gas');
    }

    public function fire()
    {
        return view('property.compliance.fire');
    }

    public function inspection()
    {
        return view('property.compliance.inspection');
    }

    public function energy()
    {
        return view('property.compliance.energy');
    }
}
