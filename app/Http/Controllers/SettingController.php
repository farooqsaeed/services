<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        $user = Auth::user();
        $setting = setting::where('user_id', $user->id)->first();
        return view('setting.enrolment', compact(['setting']));
    }

    public function StoreEnrollment(Request $request)
    {
        $user = Auth::user();
        $setting = setting::where('user_id', $user->id)->first();
        $update = [
            'welcome_message' => $request->welcome_message,
        ];
        $setting->update($update);
        return response()->json(['result' => 'Successfully added']);
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
        $user = Auth()->user();
        $setting = setting::where('user_id', $user->id)->select('id', 'level_one', 'description_one', 'level_second', 'description_second', 'level_third', 'description_third')->first();
        return view('setting.contractorpriority', compact(['setting']));
    }

    public function SetContractorPriority()
    {
        $user = Auth()->user();
        $setting = setting::where('user_id', $user->id)->select('id', 'level_one', 'description_one', 'level_second', 'description_second', 'level_third', 'description_third')->first();
        return view('setting.set_contractorpriority', compact(['setting']));
    }

    public function set_contractor_priority(Request $request)
    {
        $user = Auth()->user();
        $setting = setting::where('user_id', $user->id)->first();
        if (!empty($setting)) {
            $update = [
                "level_one" => $request->level_one,
                "description_one" => $request->description_one,
                "level_second" => $request->level_second,
                "description_second" => $request->description_second,
                "level_third" => $request->level_third,
                "description_third" => $request->description_third,
            ];
            setting::where('user_id', $user->id)->update($update);
        } else {
            return json_encode([
                'status' => 0,
                'success' => 'User not found!',
            ]);
        }
        return redirect("/contractorpriority")->with(['result', 'Setting updated successfully']);
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

        $user = Auth::user();
        $setting = setting::where('user_id', $user->id)->first();

        if (!empty($setting)) {
            $update = [
                'opening_hour' => $request->opening_hour,
                'closing_hour' => $request->closing_hour,
                'phone' => $request->phone,
                'logo' => $path,
                'user_id' => $user->id
            ];
            $setting->update($update);
        } else {
            $create = [
                'opening_hour' => $request->opening_hour,
                'closing_hour' => $request->closing_hour,
                'phone' => $request->phone,
                'logo' => $path,
                'user_id' => $user->id
            ];
            setting::create($create);
        }
        return view('setting.companydetails');
    }


    public function autoresponder()
    {
        $user = Auth::user();
        $setting = setting::where('user_id', $user->id)->first();

        return view(
            'setting.autoresponder',
            compact(['setting'])
        );
    }

    public function StoreAutoResponder(Request $request)
    {
        $user = Auth::user();
        $setting = setting::where('user_id', $user->id)->first();

        if (!empty($setting)) {
            $update = [
                "email_description" => $request->email_description,
            ];
            $setting->update($update);
        } else {
            $create = [
                "email_description" => $request->email_description,
                'user_id' => $user->id,
            ];
            setting::create($create);
        }
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
        $category = Category::findorFail(1);
        return view('setting.licences', compact(['category']));
    }
}
