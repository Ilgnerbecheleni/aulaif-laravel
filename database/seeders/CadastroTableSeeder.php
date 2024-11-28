<?php

namespace Database\Seeders;

use App\Models\Cadastro;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CadastroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //criando multiplos cadastros
        Cadastro::insert([
            ['nome' => 'Jose ', 'idade' => 22],
            ['nome' => ' silva', 'idade' => 26],
            ['nome' => 'Ilgner silva', 'idade' => 22],
        ]);
    }
}
