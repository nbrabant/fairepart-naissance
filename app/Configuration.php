<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model {

    protected $table = 'configurations';

    protected $fillable = [
        'name',
        'key',
        'value',
    ];

    public function getFormattedValueAttribute()
    {
        if ($this->key === 'name') {
            return explode('|', $this->value);
        }

        return $this->value;
    }

    public static function onMaintenanceMode()
    {
        $result = self::whereKey('maintenance')->first();

        return $result && $result->value === '1';
    }

    // get list
    public static function getList()
    {
        $return = [];

        self::all()->each(function($config) use (&$return) {
            $return[$config->key] = $config->formatted_value;
        });

        return $return;
    }


}
