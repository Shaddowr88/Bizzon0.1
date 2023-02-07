<?php
use App\budget;
use Illuminate\Database\Seeder;

class budgetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $budgets = new budget();
        $budgets ->montent = "12000";
        $budgets ->type = "electicite";
        $budgets ->save();

        $budgets = new budget();
        $budgets ->montent = "300";
        $budgets ->type = "eauFroide";
        $budgets ->save();

        $budgets = new budget();
        $budgets ->montent = "4993";
        $budgets ->type = "eauChaude";
        $budgets ->save();

        $budgets = new budget();
        $budgets ->montent = "4252";
        $budgets ->type = "menage";
        $budgets ->save();

        $budgets = new budget();
        $budgets ->montent = "34556";
        $budgets ->type = "juridique";
        $budgets ->save();
    }
}
