<?php

use Illuminate\Database\Seeder;
use App\Servico;

class ServicoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		// PessoaFisica::truncate();
		$faker = \Faker\Factory::create('pt_BR');
		// And now, let's create a few articles in our database:
		Servico::create([
			'descricao' => 'Banho & Tosa',
			'valor' => rand(0, 99999)
		]);
		Servico::create([
			'descricao' => 'Consulta',
			'valor' => rand(0, 99999)
		]);
    }
}
