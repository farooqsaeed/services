<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Tenant;
use Validator;

class TenantController extends Controller
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
            'mobile_no' => 'required|unique:tenants',
            'email' => 'required|unique:tenants',
            'house_no' => 'required',
            'street_name' => 'required',
            'town'=> 'required',
            'postal_code' => 'required',
         ]);
   
        if($validator->fails()){
            $errors = $validator->errors();
            return json_encode(['status'=>0,'errors'=>$errors]); 
        }

         $user = Tenant::create(
            array(
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'mobile_no'=>$request->mobile_no,
                'email'=>$request->email,
                'house_no'=>$request->house_no,
                'street_name'=>$request->street_name,
                'town'=>$request->town,
                'postal_code'=>$request->postal_code,
                'social_id'=>$request->social_id
            )
        );

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
