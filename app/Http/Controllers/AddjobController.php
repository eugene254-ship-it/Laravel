<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Addjob;
use Carbon\Carbon;
use Brian2694\Toastr\Facades\Toastr;
use DB;

class AddjobController extends Controller
{
     public function addJob()
    {
        return view('job.addjob');
    }

    public function saveJob(Request $request)
    {
        $request->validate([
            'jobTitle'      => 'required|string|max:255',
            'department'     => 'required|string|max:255',
            'job_location'     => 'required|string|max:255',
            'no_of_vacancies' => 'required|string|max:255',
            'salaryFrom'  => 'required|string|max:255',
            'salaryTo'=> 'required|string|max:255',
            'jobType'    => 'required|string|max:255',
            'status'     => 'required|string|max:255',
            'start_date'  => 'required|string|max:255',
            'expired' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);
        DB::beginTransaction();
        try{
             $dt       = Carbon::now();
            $todayDate = $dt->toDayDateTimeString();

            
            $job->jobTitle     = $request->jobTitle;
            $job->department    = $request->department;
            $job->job_location  = $request->job_location;
            $job->no_of_vacancies  = $request->no_of_vacancies;
            $job->salaryFrom       = $request->salaryFrom;
            $job->salaryTo =    $request->salaryTo;   
            $job->jobType = $request->jobType ;   
            $job->status = $request->status;    
            $job->start_date     = $request->start_date; 
            $job->expired = $request->expired;
            $job->description = $request->description; 
            $job->save();
            
            DB::commit();
            Toastr::success('Job Saved successfully :)','Success');
            return redirect()->back();
        }catch(\Exception $e){
            DB::rollback();
            Toastr::error('Job Save failed :)','Error');
            return redirect()->back();
        }
    }


}

