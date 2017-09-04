<?php

namespace App\Http\Controllers\Admin;

use App\Configuration;
use Validator;
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
        $validator = Validator::make($request->all(), Configuration::getValidators());

        if ($validator->fails()) {
            return redirect('saucisson/configuration');
        }

        $values = $request->only(array_keys(Configuration::getValidators()));

        foreach ($values as $key => $value) {
            $configuration = Configuration::byKey($key)->first();

            if (is_null($configuration) || !($configuration instanceof Configuration)) {
                continue;
            }

            $configuration->value = $value;
            $configuration->save();
        }

        return redirect('saucisson/configuration');
    }

}
