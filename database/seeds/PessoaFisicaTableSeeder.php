<?php

use Illuminate\Database\Seeder;
use App\PessoaFisica;

class PessoaFisicaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	public function run() {
		// PessoaFisica::truncate();
		$faker = \Faker\Factory::create('pt_BR');
		// And now, let's create a few articles in our database:
		for ($i = 0; $i < 50; $i++) {
			PessoaFisica::create([
				'nome' => $faker->name,
				'cpf'  => $faker->cpf(false),
				'telefone' => '11948301762'
			]);
		}
	}
}
