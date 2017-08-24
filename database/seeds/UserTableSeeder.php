<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'     => 'Nicolas Brabant',
            'email'    => 'brabantnicolas@gmail.com',
            'password' => '$azerty1',
        ]);
        User::create([
            'name'     => 'Aurore Derumier',
            'email'    => 'ow0ah@live.fr',
            'password' => '$azerty1',
        ]);
    }

}
