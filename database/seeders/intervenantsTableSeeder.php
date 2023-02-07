<?php

use App\Intervenant;
use Illuminate\Database\Seeder;

class intervenantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $intervenant = new Intervenant();
        $intervenant->name ="Barry";
        $intervenant->numero ="069966";
        $intervenant->email = "barry@gmail.com";
        $intervenant->save();
        $intervenant->metier()->attach(1);

        $intervenant = new Intervenant();
        $intervenant->name ="carry";
        $intervenant->numero ="0699669";
        $intervenant->email = "carry@gmail.com";
        $intervenant->save();
        $intervenant->metier()->attach(2);

        $intervenant = new Intervenant();
        $intervenant->name ="tarry";
        $intervenant->numero ="069966";
        $intervenant->email = "tarry@gmail.com";
        $intervenant->save();
        $intervenant->metier()->attach(3);

        $intervenant = new Intervenant();
        $intervenant->name ="parry";
        $intervenant->numero ="06996";
        $intervenant->email = "parry@gmail.com";
        $intervenant->save();
        $intervenant->metier()->attach(4);

        $intervenant = new Intervenant();
        $intervenant->name ="farry";
        $intervenant->numero ="0699";
        $intervenant->email = "farry@gmail.com";
        $intervenant->save();
        $intervenant->metier()->attach(5);

        $intervenant = new Intervenant();
        $intervenant->name ="garry";
        $intervenant->numero ="069";
        $intervenant->email = "garry@gmail.com";
        $intervenant->save();
        $intervenant->metier()->attach(6);

        $intervenant = new Intervenant();
        $intervenant->name ="narry";
        $intervenant->numero ="06";
        $intervenant->email = "narry@gmail.com";
        $intervenant->save();
        $intervenant->metier()->attach(7);



    }
}
