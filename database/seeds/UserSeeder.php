<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use PortasAbertas\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(["name"=>"FOA SI","email"=>"portasabertassi@unifoa.edu.br","password"=>Hash::make("foasi2019")]);
        
    }
}
