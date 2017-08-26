<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $fillable = [
        'email',
        'ip_address',
        'sended',
        'readed',
    ];

    public function scopeSended(Builder $query, $sended = 1)
    {
        return $query->where('sended', $sended);
    }

    public function scopeReaded(Builder $query, $readed = 1)
    {
        return $query->where('readed', $sended);
    }
}
