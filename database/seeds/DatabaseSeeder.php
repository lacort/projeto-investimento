<?php

use Illuminate\Database\Seeder;
use App\Entities\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create
        ([
            'cpf'           => '11122233344',
            'name'          => 'Jefferson Lacort',
            'phone'         => '11979725768',
            'birth'          => '1983-07-29',
            'gender'        => 'M',
            'email'         => 'lacort2@gmail.com',
            'password'      => env('PASSWORD_HASH') ? bcrypt('123456') : '123456',
            
        ]);
    }
}
