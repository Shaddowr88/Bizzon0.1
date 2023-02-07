<?php
namespace Database\Seeders;

use App\Models\Appartements;
use Illuminate\Database\Seeder;

class AppartementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $appartement = new appartement();
        $appartement ->numero ="2634";
        $appartement ->etage = "25";
        $appartement ->batiment_id = "48";
        $appartement ->description = "Appartement 70M carré";
        $appartement ->save();



        $appart= new Appartement();
        $appart->numero ="2135";
        $appart->etage = "3";
        $appart->batiment_id = "47";
        $appart->description = " Appartement duplex 90M carré";
        $appart->save();

        $appart= new Appartement();
        $appart->numero ="2434";
        $appart->etage = "2";
        $appart->batiment_id = "25";
        $appart->description = " Appartement duplex 90M carré";
        $appart->save();

        $appart= new Appartement();
        $appart->numero ="2764";
        $appart->etage = "0";
        $appart->batiment_id = "47";
        $appart->description = " Appartement 50M carré";
        $appart->save();

        $appart= new Appartement();
        $appart->numero ="8664";
        $appart->etage = "8";
        $appart->batiment_id = "47";
        $appart->description = " Appartement 50M carré";
        $appart->save();

        $appart= new Appartement();
        $appart->numero ="2135";
        $appart->etage = "3";
        $appart->batiment_id = "47";
        $appart->description = " Appartement duplex 90M carré";
        $appart->save();

        $appart= new Appartement();
        $appart->numero ="2434";
        $appart->etage = "2";
        $appart->batiment_id = "46";
        $appart->description = " Appartement duplex 90M carré";
        $appart->save();

        $appart= new Appartement();
        $appart->numero ="2764";
        $appart->etage = "0";
        $appart->batiment_id = "46";
        $appart->description = " Appartement 50M carré";
        $appart->save();

        $appart= new Appartement();
        $appart->numero ="8664";
        $appart->etage = "8";
        $appart->batiment_id = "24";
        $appart->description = " Appartement 50M carré";
        $appart->save();

        $appart= new Appartement();
        $appart->numero ="2135";
        $appart->etage = "3";
        $appart->batiment_id = "46";
        $appart->description = " Appartement duplex 90M carré";
        $appart->save();

        $appart= new Appartement();
        $appart->numero ="2434";
        $appart->etage = "2";
        $appart->batiment_id = "24";
        $appart->description = " Appartement duplex 90M carré";
        $appart->save();

        $appart= new Appartement();
        $appart->numero ="2764";
        $appart->etage = "0";
        $appart->batiment_id = "36";
        $appart->description = " Appartement 50M carré";
        $appart->save();

        $appart= new Appartement();
        $appart->numero ="8664";
        $appart->etage = "8";
        $appart->batiment_id = "32";
        $appart->description = " Appartement 50M carré";
        $appart->save();

        $appart= new Appartement();
        $appart->numero ="2764";
        $appart->etage = "0";
        $appart->batiment_id = "46";
        $appart->description = " Appartement 50M carré";
        $appart->save();

        $appart= new Appartement();
        $appart->numero ="8664";
        $appart->etage = "8";
        $appart->batiment_id = "32";
        $appart->description = " Appartement 50M carré";
        $appart->save();

        $appart= new Appartement();
        $appart->numero ="2135";
        $appart->etage = "3";
        $appart->batiment_id = "24";
        $appart->description = " Appartement duplex 90M carré";
        $appart->save();

        $appart= new Appartement();
        $appart->numero ="2434";
        $appart->etage = "2";
        $appart->batiment_id = "32";
        $appart->description = " Appartement duplex 90M carré";
        $appart->save();

        $appart= new Appartement();
        $appart->numero ="2764";
        $appart->etage = "0";
        $appart->description = " Appartement 50M carré";
        $appart->batiment_id = "32";
        $appart->save();

        $appart= new Appartement();
        $appart->numero ="8664";
        $appart->etage = "8";
        $appart->description = " Appartement 50M carré";
        $appart->batiment_id = "32";
        $appart->save();
    }
}
