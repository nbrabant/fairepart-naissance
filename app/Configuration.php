<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model {

    protected $table = 'configurations';

    protected $fillable = [
        'name',
        'key',
        'value',
    ];

    // get list

}
