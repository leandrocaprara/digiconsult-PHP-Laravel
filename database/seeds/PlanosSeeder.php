<?php

use Illuminate\Database\Seeder;
use App\Plano;

class PlanosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plano::create([
            'name' => 'Unimed',
        ]);
        Plano::create([
            'name' => 'Oeste Saúde',
        ]);
        Plano::create([
            'name' => 'Athia',
        ]);
    }
}
