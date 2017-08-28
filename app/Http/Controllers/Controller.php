<?php

namespace App\Http\Controllers;

use App\Configuration;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{

    public function getIndex()
    {
        // return view('landing');
        if (Configuration::onMaintenanceMode() && $_SERVER['HTTP_HOST'] !== 'baby_parallax.dev') {
            return view('landing');
        }

		return view('parallax', [
            'datas' => Configuration::getList(),
        ]);
    }


}
