<?php

namespace App\Http\Controllers;

use App\Configuration;
use App\Email;
use Validator;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{

    protected $validation = [
        'email' => 'required|email|unique:emails,email'
    ];

    protected $messages     = [];
    protected $attributes   = [];

    public function getIndex(Request $request)
    {
        return view('landing');
        if (Configuration::onMaintenanceMode() && $_SERVER['HTTP_HOST'] !== 'baby_parallax.dev') {
            return view('landing');
        }

		return view('parallax', [
            'datas' => Configuration::getList(),
        ]);
    }

    public function addEmail(Request $request)
    {
        $model = Email::class;

        $this->validate($request, $this->validation, $this->messages, $this->attributes);

        $attributes = $request->only(array_keys($this->validation));
        $attributes['ip_address'] = $_SERVER['REMOTE_ADDR'];

        $model::create($attributes);

        return [
            'statut'        => 200,
            'statusText'    => 'Votre email a bien été enregistré'
        ];
    }

}
