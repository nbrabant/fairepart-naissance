<?php

namespace App\Http\Controllers\Admin;

use App\Job;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class JobsController extends BaseController
{
    public function index(Request $request)
    {
        $jobs = Job::all();

        return view('admin.jobs.index', compact('jobs'));
    }
}
