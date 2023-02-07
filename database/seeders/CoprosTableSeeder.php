<?php
namespace Database\Seeders;

use App\Models\Copros;
use Illuminate\Database\Seeder;

class CoprosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $coPro = new Copros();
        $coPro ->name = "Mars";
        $coPro ->cp = "75017";
        $coPro ->ville = "paris";
        $coPro ->save();


        $coPro = new Copros();
        $coPro ->name = "heart";
        $coPro ->cp = "75017";
        $coPro ->ville = "paris";
        $coPro ->save();

        $coPro = new Copros();
        $coPro ->name = "Maria";
        $coPro ->cp = "78190";
        $coPro ->ville = "Trappes";
        $coPro ->save();

        $coPro = new Copros();
        $coPro ->name = "terria";
        $coPro ->cp = "78317";
        $coPro ->ville = "saint-germain";
        $coPro ->save();
    }
}
