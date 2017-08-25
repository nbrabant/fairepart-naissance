<?php

namespace App\Http\Controllers\Admin;

use App\Configuration;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class ConfigurationController extends BaseController
{
    public function show(Request $request)
    {
        $configurations = Configuration::all();

        return view('admin.configuration.show', compact('configurations'));
    }

    public function update(Request $request)
    {


        return response();
    }
}
