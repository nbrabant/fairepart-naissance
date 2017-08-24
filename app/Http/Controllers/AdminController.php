<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class AdminController extends BaseController
{
    public function index()
    {
        // récup log de consultation

        return view('admin.index');
    }
}
