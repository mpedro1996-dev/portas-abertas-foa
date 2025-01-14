<?php

use Illuminate\Database\Seeder;

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
        $this->call(EscolaSeeder::class);
        $this->call(CursoSeeder::class);
        $this->call(EstadoTableSeeder::class);
        $this->call(UserSeeder::class);
    }
}
