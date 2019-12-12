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
        $this->call(insert_programa_social::class);
        $this->call(insert_familia::class);
        $this->call(insert_pessoa::class);
    }
}
