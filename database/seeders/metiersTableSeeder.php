<?php

use App\Metier;
use Illuminate\Database\Seeder;

class metiersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $metiers = ['chaufagiste', 'électricien', 'plomber', 'telecom', 'audio-visuelle', 'technicien', 'jardinier',];
        foreach ($metiers as $metier) {
            $metiers = new Metier();
            $metiers->name = $metier;
            $metiers->save();
        }

    }
}
