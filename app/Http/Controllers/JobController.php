<?php

namespace App\Http\Controllers;

use App\Jobs;
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
}
