<?php

use App\Configuration;
use Illuminate\Database\Seeder;

class ConfigurationTableSeeder extends Seeder
{

    private $data = [
        [ 'name' => "En maintenance",   'key' => "maintenance",     'value' => 0, ],
        [ 'name' => "Genre",            'key' => "gender",          'value' => 'boy', ],
        [ 'name' => "Prénom",           'key' => "name",            'value' => 'A|l|a|s|t|a|i|r', ],
        [ 'name' => "Taille",           'key' => "size",            'value' => '56cm', ],
        [ 'name' => "Poids",            'key' => "weight",          'value' => '4.6kg', ],
        [ 'name' => "Date",             'key' => "date",            'value' => '9 septembre 2017', ],
        [ 'name' => "Heure",            'key' => "moment",          'value' => '19h02', ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data as $row) {
            Configuration::create($row);
        }
    }

}
