<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    protected $childType = 'girl';

    private $childProperties = [
        'boy'   => [
            'type'      => 'boy',
            'name'      => ['A','l','a','s','t','a','i','r'],
            'size'      => '56cm',
            'weight'    => '4.6kg',
            'date'      => '9 septembre 2017',
            'moment'    => '19h02',
        ],
        'girl'   => [
            'type'      => 'girl',
            'name'      => ['W','i','l','h','e','l','m','i','n','a'],
            'size'      => '56cm',
            'weight'    => '4.6kg',
            'date'      => '9 septembre 2017',
            'moment'    => '19h02',
        ],
    ];


    public function getIndex()
    {
		return view('parallax', [
            'datas' => $this->childProperties[$this->childType],
        ]);
    }
}
