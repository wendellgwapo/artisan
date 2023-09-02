<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        return view('job_submit');
    }

    public function search()
    {
        // Logic for job search
        return view('job_search', ['jobs' => $jobs]);
    }
}
