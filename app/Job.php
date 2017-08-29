<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'queue',
        'payload',
        'attempts',
        'reserved',
        'reserved_at',
        'available_at',
        'created_at',
    ];

}
