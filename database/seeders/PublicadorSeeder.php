<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Publicador;
use GuzzleHttp\Promise\Create;

class PublicadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Publicador::create([
            'nombre' => 'Kenisson Favero',
            'fecha_nacimiento' => '1983-10-18',
            'fecha_de_bautismo' => '1995-01-07',
            'anciano' => TRUE,
            'precursor' => FALSE,
            'otras_ovejas' => TRUE,
            'siervo_ministerial' => FALSE,
        ]);
    }
}
