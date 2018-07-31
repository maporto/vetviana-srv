<?php

use Illuminate\Database\Seeder;
use App\Agendamento;

class AgendamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$faker = \Faker\Factory::create('pt_BR');
		// And now, let's create a few articles in our database:
		for ($i = 0; $i < 50; $i++) {
			Agendamento::create([
				'pessoafisica_id' => rand(1, 50),
				'servico_id' => rand(1, 2),
				'datahora' => $faker->dateTime(),
				'status' => $faker->randomElement(['S', 'A', 'C', 'F'])
			]);
		}

    }
}
