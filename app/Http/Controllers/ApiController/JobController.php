<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Job;
use App\Models\Contractor_job;
use Carbon\Carbon;
use Validator;

class JobController extends Controller
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
        
        $due_jobs_arr = array();
        $open_jobs_arr = array();
        $pool_jobs_arr = array();
        $due_jobs = Contractor_job::where('contractor_id','=',$id)->where('approval_status','=','Approved')->where('created_at', '<=', Carbon::now()->subDays(2)->toDateTimeString())->get();
        foreach ($due_jobs as $due_job) {
            $due_jobs_arr[] = $due_job->id;
        }

        $pool_jobs = Contractor_job::where('contractor_id','=',$id)->where('approval_status','=','Pending')->get();
        foreach ($pool_jobs as $pool_job) {
            $pool_jobs_arr[] = $pool_job->id;
        }

        $open_jobs = Contractor_job::where('contractor_id','=',$id)->where('approval_status','=','Approved')->where('job_status','=','Pending')->get();
        foreach ($open_jobs as $open_job) {
            $open_jobs_arr[] = $open_job->id;
        }

        $openJobResult = Job::whereIn('id',$open_jobs_arr)->select('id','tenant_name','category','address','job_date','job_time')->get();
        $dueJobResult = Job::whereIn('id',$due_jobs_arr)->select('id','tenant_name','category','address','job_date','job_time')->get();
        $poolJobResult = Job::whereIn('id',$pool_jobs_arr)->select('id','tenant_name','category','address','job_date','job_time')->get();

        if (count($openJobResult)==0 || count($dueJobResult)==0 || count($poolJobResult)==0) {
            return json_encode(['status'=>0,'message'=>'record not found!']);
        }

        return json_encode([
            'status'=>1,
            'message'=>'Record found successfully',
            'statistics' => array('due' => count($dueJobResult),'pool'=>count($poolJobResult),'open'=>count($openJobResult) ),
            'DueJobs'=>$dueJobResult,
            'PoolJobs'=>$poolJobResult,
            'OpenJobs'=>$openJobResult
        ]);
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

    public function JobDetails($id)
    {
        $result = Job::where('id','=',$id)->select('id','subject','description','attachment','address','contact','tenant_name','case_no')->first();

        return json_encode([
            'status'=>1,
            'message'=>'Record found successfully',
            'success'=>$result,
        ]);

    }
}
