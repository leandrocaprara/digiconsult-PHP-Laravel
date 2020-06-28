<?php

use Illuminate\Database\Seeder;
use App\Paciente;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PacientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Paciente::create([
            'name' => Str::random(20),
            'email' => Str::random(10).'@gmail.com',
            'cpf' => '11122233344',
            'planos_id' => '2',
        ]);
    }
}
