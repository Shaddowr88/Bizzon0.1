<?php

use Illuminate\Database\Seeder;

class PartiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        {
            //
            $Parties = ['Escalier', 'Palier', 'Sous-sol', 'Parking','jardin',
                'toit', 'Cave', 'Grenier', 'Jardin','ascensseur','toit-vegetal'];
            foreach ($Parties as $CP) {
                $Parties = new \App\partie();
                $Parties->nom = $CP;
                $Parties->save();
            }
        }
    }
}
