<?php

use App\equipement;
use Illuminate\Database\Seeder;

class EquipementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $equipements = ['gaz','√©lectricit√©','plomberie','chaudiere','telecom','audio-vusuelle','ascensseur','sanitaire',];
        foreach ($equipements as $eq) {
            $equipements = new equipement();
            $equipements->eqp = $eq;
            $equipements->save();
        }

    }
}
