<?php

use Illuminate\Database\Seeder;

class fonctionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $fonction =new Role();
        $fonction->nom = "Administrateur";
        $fonction->description="Gestion du site e-copro";
        $fonction->save();
    }


}
