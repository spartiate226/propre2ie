<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class)->create();
        factory(\App\User::class)->create(["name"=>"visitor","password"=>\Illuminate\Support\Facades\Hash::make("visite")]);
    }
}
