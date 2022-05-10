<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Contractor;
use App\Models\Service;
use App\Models\workinghour;
use Validator;

class ContractorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users',
            'landline_no' => 'required',
            'mobile_no' => 'required',
            'house_no' => 'required',
            'street_name'=> 'required',
            'town_city' => 'required',
            'postal_code' => 'required',
            'area_of_coverage'=>'required'
         ]);
   
        if($validator->fails()){
            $errors = $validator->errors();
            return json_encode(['status'=>0,'errors'=>$errors]); 
        }

         $user = Contractor::create(
            array(
                'business_name'=>$request->business_name,
                'first_name' => $request->first_name,
                'last_name'=>$request->last_name,
                'email' =>$request->email,
                'landline_no' =>$request->landline_no,
                'mobile_no' =>$request->mobile_no,
                'house_no'=>$request->house_no,
                'street_name'=>$request->street_name,
                'town_city'=>$request->town_city,
                'postal_code'=>$request->postal_code,
                'area_of_coverage'=>$request->area_of_coverage,
            )
        );

        if (!empty($user)) {

            foreach ($request->services as $service) {
               Service::create(
                array(
                    'name'=>$service,
                    'user_id' => $user->id,
                )
               ); 
            } 
         } 

        return json_encode(['status'=>1,'message'=>'user registered successfully','success'=>$user]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
