<?php

namespace Database\Seeders;

use App\Models\train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $train = new train();
            $train->azienda = $faker->word();
            $train->stazione_partenza = $faker->word();
            $train->stazione_arrivo = $faker->word();
            $train->giorno_partenza = $faker->date('2022_12_d');
            $train->orario_partenza = $faker->time();
            $train->giorno_arrivo = $faker->date('2022_12_d');
            $train->orario_arrivo = $faker->time();
            $train->codice_treno = $faker->numberBetween(10000, 99999);
            $train->numero_carrozze = $faker->numberBetween(5, 20);
            $train->partito = $faker->numberBetween(0, 1);
            $train->cancellato = $faker->numberBetween(0, 1);
            $train->save();
            // dd($train);
        }
    }
}
