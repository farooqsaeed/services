<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\Groups;

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
        $groups = Group::orderBy('Id', 'DESC')->get();
        return view('setting.autoforwarding',compact(['groups']));
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
