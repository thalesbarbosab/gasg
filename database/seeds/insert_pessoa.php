<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class insert_pessoa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("
            INSERT INTO pessoas (familia_id, nome, sexo, data_nascimento, naturalidade, cpf, rg,
            estado_civil)
            VALUES
            (1, 'João da Silva', 'M', '1995-06-22', 'Brasileiro', '58226715008', '308031994','solteiro'),
            (1, 'Maria da Silva', 'F', '1991-07-12', 'Brasileira', '45117272013', '410572366','casada'),
            (1, 'Henrique da Silva', 'M', '2010-01-10', 'Brasileiro', '88612751098',
            '191925639','solteiro'),
            (2, 'Daniel de Souza ', 'M', '1986-07-20', 'Brasileiro', '73556689006',
            '243680648','casado'),
            (2, 'Gabriela de Souza', 'M', '1982-06-23', 'Brasileira', '26241701037',
            '174829553','casada'),
            (NULL, 'Michele de Souza', 'M', '1993-03-13', 'Brasileira', '03432824025',
            '486034495','solteira'),
            (2, 'Ana de Souza', 'M', '1990-10-27', 'Brasileira', '02498380019', '335002493','casada'),
            (3, 'Juliana Peres', 'M', '1976-11-12', 'Brasileira', '18522575045', '270381508','solteira'),
            (3, 'Paulo Peres', 'M', '1989-01-11', 'Brasileiro', '59697662088', '485824541','solteiro'),
            (NULL, 'João Carlos Amorim', 'M', '1996-03-10', 'Brasileiro', '79159458070',
            '165404759','solteiro')
        ");
    }
}
