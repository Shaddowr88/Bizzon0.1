<?php

use App\etage;
use Illuminate\Database\Seeder;

class EtagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $etages = ['RDC', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '-1', '-2', '-3', '-4', '-5', '-6', '-7',];
        foreach ($etages as $et) {
            $etages = new etage();
            $etages->numero_etage = $et;
            $etages->save();
        }
    }
}
