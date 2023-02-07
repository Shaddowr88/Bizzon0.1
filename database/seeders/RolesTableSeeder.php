<?php
namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role =new Roles();
        $role->nom = "Administrateur";
        $role->description="Gestion du site e-copro";
        $role->save();

        $role =new Roles();
        $role->nom = "Utilisateur";
        $role->description="utilisateur du site";
        $role->save();

    }
}
