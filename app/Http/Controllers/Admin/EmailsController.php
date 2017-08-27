<?php

namespace App\Http\Controllers\Admin;

use App\Email;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class EmailsController extends BaseController
{

    public function index(Request $request)
    {
        $emails = Email::all();

        return view('admin.emails.index', compact('emails'));
    }

    public function create(Request $request)
    {
        return view('admin.emails.create');
    }

    public function store(Request $request)
    {



        return redirect('admin/emails');
    }

    public function show(Request $request)
    {


        return view('admin.emails.show');
    }

    public function update(Request $request)
    {


        return redirect('admin/emails');
    }

}
