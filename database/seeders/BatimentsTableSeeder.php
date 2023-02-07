<?php
namespace Database\Seeders;

use App\Models\Batiments;
use Illuminate\Database\Seeder;

class BatimentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $bat = new Batiments();
         $bat ->nom = "A";
        $bat ->numero = "4";
        $bat ->etage = "4";
        $bat ->adresse = "Bien moins prest";
        $bat ->save();

        $bat = new Batiments();
         $bat ->nom = "B";
        $bat ->numero = "9";
        $bat ->etage = "4";
        $bat ->adresse = "Cour vite";
        $bat ->save();

        $bat = new Batiments();
         $bat ->nom = "G";
        $bat ->numero = "5";
        $bat ->etage = "4";
        $bat ->adresse = "pas loins de moi";
        $bat ->save();

         $bat = new Batiments();
         $bat ->nom = "G";
         $bat ->numero = "7";
        $bat ->etage = "5";
        $bat ->adresse = "loins derrier toi ";
        $bat ->save();

    }
}
