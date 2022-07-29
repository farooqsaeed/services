<?php

namespace App\Http\Controllers;

use App\Models\Contractor;
use App\Models\contractor_auto_forwarding;
use App\Models\Group;
use App\Models\landloard_auto_forwarding;
use App\Models\User;
use App\Models\setting;

use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\Groups;
use Illuminate\Support\Facades\Auth;

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
        $user = auth()->user();
        $landlords = landloard_auto_forwarding::orderBy('id', 'DESC')->get();
        $contractors_auto = contractor_auto_forwarding::orderBy('id', 'DESC')->get();
        $contractors = Contractor::orderBy('id', 'DESC')->get();
        $groups = Group::orderBy('id', 'DESC')->get();

        return view('setting.autoforwarding', compact(['groups', 'contractors', 'user', 'landlords', 'contractors_auto']));
    }

    public function LandlordApprovals(Request $request)
    {
        $landlordApproval = landloard_auto_forwarding::create($request->all());
        return response()->json(['result' => 'Successfully sent for Approvals ']);
    }

    public function ContractorApprovals(Request $request)
    {
        $contractor_forwarding = contractor_auto_forwarding::create($request->all());
        return response()->json(['result' => 'Successfully forwarded to Contractor!']);
    }

    public function contractorpriority()
    {
        return view('setting.contractorpriority');
    }

    public function companydetails()
    {
        return view('setting.companydetails');
    }

    public function store_company_details(Request $request)
    {

        $path = null;
        if ($request->hasFile('logo')) {
            $image = $request->logo;
            $name = time();
            $file = $image->getClientOriginalName();
            $extension = $image->extension();
            $ImageName = $name . $file;
            $fileName = md5($ImageName);
            $fullPath =  $fileName . '.' . $extension;
            $image->move(public_path('upload/Image/'), $fullPath);
            $path = 'upload/Image/' . $fullPath;
        }

        $user = Auth()->user();
        setting::create([
            'opening_hour' => $request->opening_hour,
            'closing_hour' => $request->closing_hour,
            'phone' => $request->phone,
            'logo' => $path,
            'user_id' => $user->id
        ]);

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
        $contractors = Contractor::orderBy('Id', 'desc')->get();
        return view('setting.contractorcompliance', compact(['contractors']));
    }

    public function storeContractorCompliance(Request $request)
    {
        return $request->all();
        return view('setting.contractorcompliance', compact(['contractors']));
    }



    
    public function licences()
    {
        return view('setting.licences');
    }
}
