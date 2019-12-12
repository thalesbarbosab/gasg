<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class insert_programa_social extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("
            INSERT INTO programas_sociais (nome_programa)
            VALUES
            ('Bolsa Família'),
            ('Renda cidadã'),
            ('Minha casa minha vida')
        ");
    }
}
