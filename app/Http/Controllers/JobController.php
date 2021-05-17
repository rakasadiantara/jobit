<?php

namespace App\Http\Controllers;

use App\Jobs;
use App\Company;
use App\Http\Requests\JobPostRequest;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(){
        $jobs = Jobs::all()->take(10);//take digunakan untuk melimitasi data yang diambil
        return view('welcome', compact('jobs'));
    }

    public function show($id, Jobs $job){
        return view('jobs.show', compact('job'));
    }

    public function create() {
        return view('jobs.create');
    }

    public function store(JobPostRequest $request) {
        $user_id = auth()->user()->id;
        $company = Company::where('user_id', $user_id)->first();
        $company_id = $company->id;
        Jobs::create([
            'user_id' => $user_id,
            'company_id' => $company_id,
            'title' => request('title'),
            'slug'=> str_slug(request('title')),
            'roles'=> request('roles'),
            'description'=> request('description'),
            'category_id'=> request('category'),
            'position' => request('position'),
            'address' => request('address'),
            'type' => request('type'),
            'status' => request('status'),
            'last_date' => request('last_date'),
        ]);

        return redirect()->back()->with('message', 'Job Posted Succesfully');
    }

    public function myJobs() {
        $jobs = Jobs::where('user_id', auth()->user()->id)->get();
        return view ('jobs.myjobs', compact('jobs'));
    }
}
