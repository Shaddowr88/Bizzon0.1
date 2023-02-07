<?php

namespace App\Http\Controllers\Dash;

use App\appartement;
use App\Batiment;
use App\budget;
use App\copros;
use App\depense;
use App\Http\Controllers\Controller;
use App\Intervenant;
use App\partie;
use App\User;
use App\watter;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use App\Charts\budgetChart;
class MainController extends Controller
{
//    // réccuperer les date de création des datas
//    function getAllMonths(){
//        $monthArray = array();
//        $budgetDates= budget::orderBy('created_at','ASC')->pluck('created_at');
//        $budgetDates=json_decode($budgetDates);
//
//        if (! empty($budgetDates)){
//            foreach ($budgetDates as $unformattedDate){
//                $date = new \DateTime($unformattedDate);
//       //reccupere les mois par numeros
//                $monthNo = $date->format('m');
//       //reccupere les mois par nom
//                $monthName = $date->format('M');
//                $monthArray[$monthNo] = $monthName;
//            }
//        }
//        // retourne le mois de décembre
//        //return $this->getMonthBudget(12);
//      // return view('backend/index');
//        return $monthArray;
//    }
//
//// trier les données par mois
//    function getMonthBudget( $month){
//        $MouthBudgetCount = Batiment::whereMonth('created_at', $month)->get()->count();
//       // retourne toute les donné en fonction d'un mois ( décembre )
//        return $MouthBudgetCount;
//    }
//
//// réccuperé les données par mois
//    function getMonthBudgetData(){
//        $monthBudgetCountArray = array();
//        $monthArray = $this->getAllMonths();
//        $monthNameArray = array();
//        if (! empty($monthArray)){
//// crée un tableau
//            foreach ($monthArray as $monthNo => $monthName){
//                $monthBudgetCount = $this->getMonthBudget($monthNo);
//                array_push( $monthBudgetCountArray, $monthBudgetCount);
//                array_push($monthNameArray, $monthName );
//            }
//        }
//
//        //$monthArray = $this->getAllMonths();
//        $maxNo = max( $monthBudgetCountArray);
//        $max = round(($maxNo + 10/2) /10 )*10;
//        $monthBudgetDataArray = array(
//            'months' => $monthArray,
//            'budgetCountData' => $monthBudgetCountArray,
//            'max'=> $maxNo,
//        );
//
//        //return $monthBudgetDataArray;
//         return view('backend/index', [
//             'month' => $monthArray,
//             'budgetCountData' =>$monthBudgetCountArray,
//             ]);
//    }

    function indexProprio( Request $request){
        $spent = depense::all()->pluck('created_at','tarif');
        $spentWatter = watter::all()->pluck('created_at','tarif');

//        $chart = new budgetChart();
//        $chart->labels($spent->values());
//        $chart->dataset('TestData', 'bar',$spent->keys())->backgroundColor('rgba(0,119,255,1)');


       $chart = new budgetChart();
       $chart->labels($spent->values());
       $chart->dataset('eau', 'line',$spentWatter->keys())->backgroundColor('rgba(33,231,249,20)');
       $chart->dataset('Intervention', 'line',$spent->keys())->backgroundColor('rgba(0,119,255,20)');
       return view('backend/index', ['chart' => $chart]);
    }

    public function declaration()
    {
        $batiments = Batiment::all();
        $intervenant = Intervenant::all();
        $user = User::all();
        $interMetier = Intervenant::all();

        return view('backend.Users.message02', [
            'batiments' => $batiments,
            'metier' => $interMetier,
            'intervenants' => $intervenant,
            'user' => $user
        ]);
    }

    public function contact_syndic(){
        return view('backend.Contact.index');
    }

    public function contact_prestataire(){
        return view('backend.Contact.prestataire');
    }

    public function contact_utility(){
        return view('backend.Contact.utilis');
    }


    public function Mine(){
        return view('backend.ilot.messages.creat');
    }

    public function signal(){
        $batiments = Batiment::all();
        $parties = partie::all();
        return view('backend.mine.signal',['batiments' => $batiments,
            'parties' => $parties,
        ]);
    }


    public function Documents(){
        return view('backend.Document.index');
    }


    public function dating(){
        return view('backend.Document.dating');
    }

    public function settlement(){
        return view('backend.Document.settlement');
    }




}
