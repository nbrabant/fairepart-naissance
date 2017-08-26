<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Configuration extends Model {

    protected $table = 'configurations';

    protected $fillable = [
        'name',
        'key',
        'value',
    ];

    public static function getValidators()
    {
        return self::getList(true);
    }

    public function getFormattedValueAttribute()
    {
        if ($this->key === 'name') {
            return explode('|', $this->value);
        }

        return $this->value;
    }

    public function getValidatorAttribute()
    {
        if ($this->key === 'maintenance') {
            return 'required|in:0,1';
        } elseif ($this->key === 'gender') {
            return 'required|in:boy,girl';
        }

        return 'required';
    }

    public static function onMaintenanceMode()
    {
        $result = self::whereKey('maintenance')->first();

        return $result && $result->value === '1';
    }

    // get list
    public static function getList($validator = false)
    {
        $return = [];

        self::all()->each(function($config) use (&$return, $validator) {
            $return[$config->key] = $validator ? $config->validator : $config->formatted_value;
        });

        return $return;
    }

    public function scopeByKey(Builder $query, $key = '')
    {
        return $query->whereKey($key);
    }


}
