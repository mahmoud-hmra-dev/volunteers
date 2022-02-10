<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyJobRequest;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Job;
use App\Skill;

use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\{Country,State,City};


class JobsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('job_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $countries = Country::get(["name","id"]);
        $jobs = Job::all();
       
  
       
            
        

        return view('admin.jobs.index', compact('jobs','countries'));
     

   
    }

    public function create()
    {
    
        abort_if(Gate::denies('job_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $countries = Country::get(["name","id"]);
       
        $skills = Skill::all()->pluck('name', 'id');

        return view('admin.jobs.create', compact('skills','countries'));
      
    }

    public function store(StoreJobRequest $request)
    {
        
        $request->validate([
            'title',
            'description',
            'starting_date' ,
            'Expiry_date' ,
            'contact_email',
            'City',
            'country',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:9999',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
  
        job::create($input);
  
       
        return redirect()->route('admin.jobs.index');
        


    }

    public function edit(Job $job)
    {

        abort_if(Gate::denies('job_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $countries = Country::get(["name","id"]);
        $skills = Skill::all()->pluck('name', 'id');

        $job->load('skills');

        return view('admin.jobs.edit', compact('skills', 'job','countries'));
    }

    public function update(UpdateJobRequest $request, Job $job)
    {
        $job->update($request->all());
        $job->skills()->sync($request->input('skills', []));

        return redirect()->route('admin.jobs.index');
    }

    public function show(Job $job)
    {
        abort_if(Gate::denies('job_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $job->load('skills');
        

        return view('admin.jobs.show', compact('job'));
    }

    public function destroy(Job $job)
    {
        abort_if(Gate::denies('job_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $job->delete();

        return back();
    }

    public function massDestroy(MassDestroyJobRequest $request)
    {
        Job::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

 

}
