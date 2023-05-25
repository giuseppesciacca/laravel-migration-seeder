<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $Train = new Train();
            $Train->azienda = $faker->company();
            $Train->stazione_di_partenza = $faker->city();
            $Train->stazione_di_arrivo = $faker->city();
            $Train->orario_di_partenza = $faker->time();
            $Train->orario_di_arrivo = $faker->time();
            $Train->codice_treno = $faker->randomFloat(0, 10000000, 99999999);
            $Train->numero_carrozze = $faker->randomNumber(2, true);
            $Train->in_orario = $faker->boolean();
            $Train->cancellato = $faker->boolean();
            $Train->save();
        }
    }
}
