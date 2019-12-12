<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class insert_familia extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("
            INSERT INTO `familias` (`id`, `estado`, `cidade`, `bairro`, `cep`, `logradouro`, `num_logradouro`, `id_programa`, `created_at`, `updated_at`) VALUES
            (1, 'SP', 'São Paulo', 'Bela Vista', 11211145, 'Rua 3001', 42, 1, '2019-12-09 03:00:00', '2019-12-09 03:00:00'),
            (2, 'SP', 'São Paulo', 'Aclimação', 11211146, 'Avenida Aclimação', 321, 2, '2019-12-08 03:00:00', '2019-12-08 03:00:00'),
            (3, 'SP', 'São Paulo', 'Vila Mariana', 11211147, 'Avenida 23 de maio', 123, 3, '2019-12-07 03:00:00', '2019-12-07 03:00:00')
        ");
    }
}
