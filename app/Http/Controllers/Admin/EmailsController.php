<?php

namespace App\Http\Controllers\Admin;

use App\Email;
use Validator;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class EmailsController extends BaseController
{

    protected $validation = [
        'email'         => 'required|email|unique:emails,email',
        'ip_address'    => 'ip',
        'sended'        => 'boolean',
        'readed'        => 'boolean',
    ];

    public function index(Request $request)
    {
        $emails = Email::paginate(15);

        return view('admin.emails.index', compact('emails'));
    }

    public function create(Request $request)
    {
        $email = new Email([
            'sended' => 0,
            'readed' => 0,
        ]);

        return view('admin.emails.create', compact('email'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), $this->validation);

        if ($validator->fails()) {
            $email = new Email([
                'sended' => 0,
                'readed' => 0,
            ]);

            return view('admin.emails.create', compact('email'));
        }

        $attributes = $request->only(array_keys($this->validation));

        if (!isset($attributes['sended'])) {
            $attributes['sended'] = 0;
        }

        if (!isset($attributes['readed'])) {
            $attributes['readed'] = 0;
        }

        Email::create($attributes);

        return redirect('saucisson/emails');
    }

    public function show(Request $request, $id = null)
    {
        $email = Email::findOrFail($id);

        return view('admin.emails.show', compact('email'));
    }

    public function update(Request $request, $id = null)
    {
        $email = Email::findOrFail($id);

        $this->validation['email'] .= ',' . $id;
        $validator = Validator::make($request->all(), $this->validation);

        if ($validator->fails()) {
            return view('admin.emails.show', compact('email'));
        }

        $attributes = $request->only(array_keys($this->validation));

        if (!isset($attributes['sended'])) {
            $attributes['sended'] = 0;
        }

        if (!isset($attributes['readed'])) {
            $attributes['readed'] = 0;
        }

        $email->fill($attributes)->save();

        return redirect('saucisson/emails');
    }

}
