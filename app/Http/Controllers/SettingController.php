<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{


    public function index()
    {
        return view('setting.index');
    }

    public function Enrollment()
    {
        return view('setting.enrolment');
    }

    public function autoforwarding()
    {
        return view('setting.autoforwarding');
    }

    public function contractorpriority()
    {
        return view('setting.contractorpriority');
    }

    public function companydetails()
    {
        return view('setting.companydetails');
    }
    public function autoresponder()
    {
        return view('setting.autoresponder');
    }
    public function generalenquiry()
    {
        return view('setting.generalenquiry');
    }
    public function propertycompliance()
    {
        return view('setting.propertycompliance');
    }
    public function contractorcompliance()
    {
        return view('setting.contractorcompliance');
    }

    public function licences()
    {
        return view('setting.licences');
    }
}
