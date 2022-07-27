<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Tenant;
use App\Models\Contractor;
use App\Models\Document;
use App\Models\UniqueId;
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

    // store users attachments

    public function StoreAttachments(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'attachment' => 'required',
            'achieved_date' => 'required',
            'expiry_date' => 'required',
            'doc_type' => 'required',
            'user_id' => 'required'
         ]);
   
        if($validator->fails()){
            $errors = $validator->errors();
            return json_encode(['status'=>0,'errors'=>$errors]); 
        }
        
        if ($request->hasFile('attachment')){

            $image = $request->attachment;
            $name = time();
            $file = $image->getClientOriginalName();
            $extension = $image->extension();
            $ImageName = $name.$file;
            $fileName = md5($ImageName);
            $fullPath =  $fileName.'.'.$extension;
            
            $image->move(public_path('uploads/attchments/'),$fullPath);
            $path = 'uploads/attchments/'.$fullPath;

            Document::create(
                array(
                'title' => $request->title,
                'description' =>$request->description,
                'attachment' =>$path,
                'achieved_date' =>
                  $request->achieved_date, 
                'expiry_date' =>$request->expiry_date,
                'doc_type' =>$request->doc_type,
                'user_id' =>$request->user_id,
                )
            );
        }

        return json_encode(['status'=>1,'message'=>
            'Attachment stored successfully']); 


    }

    public function UserStatus(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'unique_id' => 'required',
            'type' => 'required'
         ]);
   
        if($validator->fails()){
            $errors = $validator->errors();
            return json_encode(['status'=>0,'errors'=>$errors]); 
        }

        $Check = UniqueId::where('uid','=',$request->unique_id)->where('usertype','=',$request->type)->first();

        if (!empty($Check)) {
            return json_encode(['status'=>1,'usertype'=>$Check->usertype]);
        }else{
            return json_encode(['status'=>0,'message'=>'user not found!']);
        } 
    }

    public function IsRegister(Request $request)
    {
        if ($request->usertype=='Contractor') {

                 $contractor = Contractor::where(function ($query) use ($request) {
                      $query->where('social_id','=',$request->social_id)
                          ->orWhere('mobile_no','=',$request->mobile_no);
                    })->first();

                 if (!empty($contractor)) {

                     $token = $contractor->createToken('api-token')->plainTextToken;

                     return json_encode(['status'=>1,'IsRegister'=>true,'usertype'=>'Contractor','token'=>$token,'success'=>$contractor]);
                 }else{

                    return json_encode(['status'=>1,'IsRegister'=>false,'usertype'=>'Contractor','success'=>
                        $contractor]);
                 }

            }else{

                 $tenant = Tenant::where(function ($query) use ($request) {
                      $query->where('social_id','=',$request->social_id)
                          ->orWhere('mobile_no','=',$request->mobile_no);
                    })->first();
                 if (!empty($tenant)) {
                      $token = $tenant->createToken('api-token')->plainTextToken;

                      return json_encode(['status'=>1,'IsRegister'=>true,'usertype'=>'Tenant','token'=>$token,'success'=>$tenant]);
                  }else{
                    return json_encode(['status'=>1,'IsRegister'=>false,'usertype'=>'Tenant','success'=>$tenant]);
                  }
            }
    }
}
