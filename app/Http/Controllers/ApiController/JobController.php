<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;
use App\Models\Contractor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Job;
use App\Models\Contractor_job;
use App\Models\Jobnote;
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
        $due_jobs = Contractor_job::where('contractor_id', '=', $id)->where('approval_status', '=', 'Approved')->where('created_at', '<=', Carbon::now()->subDays(2)->toDateTimeString())->get();
        foreach ($due_jobs as $due_job) {
            $due_jobs_arr[] = $due_job->id;
        }

        $pool_jobs = Contractor_job::where('contractor_id', '=', $id)->where('approval_status', '=', 'Pending')->get();
        foreach ($pool_jobs as $pool_job) {
            $pool_jobs_arr[] = $pool_job->id;
        }

        $open_jobs = Contractor_job::where('contractor_id', '=', $id)->where('approval_status', '=', 'Approved')->where('job_status', '=', 'Pending')->get();
        foreach ($open_jobs as $open_job) {
            $open_jobs_arr[] = $open_job->id;
        }

        $openJobResult = Job::whereIn('jobs.id',$open_jobs_arr)->leftJoin('categories', 'jobs.category', '=','categories.id')->select('jobs.id','jobs.attachment','categories.name','jobs.tenant_name','jobs.address','jobs.job_date','jobs.job_time','jobs.job_time','jobs.status')->get();

        $dueJobResult = Job::whereIn('jobs.id',$due_jobs_arr)->leftJoin('categories', 'jobs.category', '=','categories.id')->select('jobs.id','jobs.attachment','categories.name','jobs.tenant_name','jobs.address','jobs.job_date','jobs.job_time','jobs.job_time','jobs.status')->get();

        $poolJobResult = Job::whereIn('jobs.id',$pool_jobs_arr)->leftJoin('categories','jobs.category', '=','categories.id')->select('jobs.id','jobs.attachment','categories.name','jobs.tenant_name','jobs.address','jobs.job_date','jobs.job_time','jobs.job_time','jobs.status')->get();

        if (count($openJobResult) == 0 && count($dueJobResult) == 0 && count($poolJobResult) == 0) {
            return json_encode(['status' => 0, 'message' => 'record not found!']);
        }

        return json_encode([
            'status' => 1,
            'message' => 'Record found successfully',
            'statistics' => array('due' => count($poolJobResult), 'pool' => count($poolJobResult), 'open' => count($openJobResult)),
            'DueJobs' => $poolJobResult,
            'PoolJobs' => $poolJobResult,
            'OpenJobs' => $openJobResult
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
        $job = Job::where('id', '=', $id)->select('id', 'case_no', 'severity', 'subject', 'attachment', 'description', 'address', 'contact', 'tenant_name','job_date','job_time')->first();

        $contractor_jobs = Contractor_job::where('job_id', '=', $id)->first();


        if (!empty($contractor_jobs)) {
            $contractor = Contractor::where('id','=',$contractor_jobs->contractor_id)->select('business_name')->first();
        } else {
            return json_encode([
                'status' => 0,
                'message' => 'Record Not Found',
            ]);
        }
 
        $result= array_merge($job->toArray(), $contractor->toArray());

        return json_encode([
            'status' => 1,
            'message' => 'Record found successfully',
            'success' => $result,
        ]);
    }

    public function ContractorJobs($id)
    {
       $idlist = array();
       $results = Contractor_job::where('contractor_id','=',$id)->get();
       foreach ($results as $result) {
          $idlist[] = $result->job_id;
       }

       $response = Job::whereIn('jobs.id',$idlist)->leftJoin('categories','jobs.category', '=','categories.id')->select('jobs.id','jobs.attachment','categories.name','jobs.tenant_name','jobs.address','jobs.job_date','jobs.job_time','jobs.job_time','jobs.status')->get();
       if (count($response)==0) {
           return json_encode([
            'status' => 0,
            'message' => 'Record Not Found',
        ]);
       }

       return json_encode([
            'status' => 1,
            'message' => 'Record found successfully',
            'success' => $response,
        ]);

    }

    public function datewisejobs($date)
    {
        $idlist = array();
       $results = Contractor_job::where('contractor_id','=',Auth::User()->id)->get();
       foreach ($results as $result) {
          $idlist[] = $result->job_id;
       }

       $response = Job::whereIn('jobs.id',$idlist)->leftJoin('categories','jobs.category', '=','categories.id')->whereDate('created_at','=',$date)->select('jobs.id','jobs.attachment','categories.name','jobs.tenant_name','jobs.address','jobs.job_date','jobs.job_time','jobs.job_time','jobs.status')->get();
       if (count($response)==0) {
           return json_encode([
            'status' => 0,
            'message' => 'Record Not Found',
        ]);
       }

       return json_encode([
            'status' => 1,
            'message' => 'Record found successfully',
            'success' => $response,
        ]);
    }
}
