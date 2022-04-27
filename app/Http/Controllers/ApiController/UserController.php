<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Tenant;
use App\Models\Contractor;
use Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    public function UserStatus(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'unique_id' => 'required'
         ]);
   
        if($validator->fails()){
            $errors = $validator->errors();
            return json_encode(['status'=>0,'errors'=>$errors]); 
        }

        $Check = User::where('unique_id','=',$request->unique_id)->first();

        if (!empty($Check)) {
            if ($Check->user_type=='Tenant') {
                // for tenant
              $tenant = Tenant::where('id','=',$Check->id)->first();
              if (!empty($tenant)) {
                  return json_encode(['status'=>1,'IsRegister'=>true,'userType'=>$Check->user_type,'success'=>$tenant]);
              }else{
                return json_encode(['status'=>1,'IsRegister'=>false,'userType'=>$Check->user_type,'success'=>$tenant]);
              }
            }else{
                // for contractor 
                $contractor = Contractor::where('id','=',$Check->id)->first();
              if (!empty($contractor)) {
                  return json_encode(['status'=>1,'IsRegister'=>true,'userType'=>$Check->user_type,'success'=>$contractor]);
              }else{
                return json_encode(['status'=>1,'IsRegister'=>false,'userType'=>$Check->user_type,'success'=>$contractor]);
              }

            }
        }else{
            return json_encode(['status'=>0,'IsRegister'=>false,'message'=>'user not found!']);
        }
    }
}
