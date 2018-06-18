<?php

use Illuminate\Database\Seeder;
use App\Entities\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        User::create([
            'cpf'       => '11122233344',
            'name'      => 'Jao',
            'phone'     => '131561681',
            'birth'     => '1980-10-01',
            'gender'    => 'M',
            'email'     => 'joao@sistema.com',
            'password'  => bcrypt('123456') ,
        ]);
    }
}
