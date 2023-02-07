<?php

namespace App\Http\Controllers\copro;
use App\Batiment;
use App\budget;
use App\Charts\budgetChart;
use App\copros;
use App\Depense;
use App\Http\Controllers\Controller;
use App\watter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;

class coProController extends Controller
{
    public function index()
    {
        $copro = DB::table('copros')
           ->orderBy('created_at','desc')->paginate(8);
      return view('backend.ilot.copro', ['copros'=>$copro]);
    }

    public function viewByCopro(Request $request){
    // Récupérer tous les bâtiments d'une même copropriété,
        $batiments = Batiment::where('copro_id',$request->id)->get();
        $copro = copros::find($request->id);
        $budgets= Budget::where('copro_id',$request->id)->get();
        $spent = depense::all()->pluck('created_at','tarif');
        $spentWatter = watter::all()->pluck('created_at','tarif');
        $chart = new budgetChart();
        $chart->labels($spent->values());
        $chart->dataset('eau', 'line',$spentWatter->keys())->backgroundColor('rgba(33,231,249,20)');
        $chart->dataset('Intervention', 'line',$spent->keys())->backgroundColor('rgba(0,119,255,20)');
        return view('backend.ilot.index', [
            'budgets' => $budgets,
            'batiments' => $batiments,
            'chart' => $chart,
            'copro'=>$copro,
        ]);
    }

    public function add() {
        $copros = copros:: all();
        return view('backend.ilot.copro.coproAdd', [
            'copros' => $copros,
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:25',
            'ville'=> 'required|max:25','cp',
            'photo_principale'=>'required|image|max:1999'
        ]);
        if ($request->hasFile('photo_principale')) {
            $fileName = $request->file('photo_principale')->getClientOriginalName();
            $request->file('photo_principale')->storeAs('public/uploads', $fileName);
            $img = Image::make($request->file('photo_principale')->getRealPath());
//            $img->insert(public_path('img/favicon.png'), 'bottom-right', 10, 10);
//            dd($fileName);
            $img->save('storage/uploads/'. $fileName);
        }
        $copros = new copros();
        $copros->name = $request->name;
        $copros->ville = $request->ville;
        $copros->cp = $request->cp;
        $copros->photo_principale = $fileName;
//        dd($request);
        $copros->save();
        return redirect() ->route('backend_homepage')
            ->with('notice', 'le programme' .$copros->name. 'a été crée');
    }

    public function update (Request $request){
        $copros = copros::find($request->id );
        $request->validate([
            'name' => 'required|max:25',
            'ville'=> 'required|max:25','cp',
        ]);
        if ($request->hasFile('photo_principale')) {
            $fileName = $request->file('photo_principale')->getClientOriginalName();
            $request->file('photo_principale')->storeAs('public/uploads', $fileName);
            $img = Image::make($request->file('photo_principale')->getRealPath());
            $img->save('storage/uploads/'. $fileName);
            $copros->photo_principale = $fileName;
        }
        $copros->name = $request->name;
        $copros->ville = $request->ville;
        $copros->cp = $request->cp;
        $copros->save();
        return redirect()->route('backend_homepage')
            ->with('notice','La copropriété' .$copros->name. 'a bien été modifié');
    }

    public function delete(Request $request){
        $copros = copros::find($request->id);
        $copros->delete ();
        return redirect()->route('backend_homepage')
            ->with('notice','programme supprimé !!!');
    }

    public function edit (Request $request){
        $copro = copros::find($request->id);
        $copros = copros::all();
        $batiments = Batiment::where('copro_id',$request->id)->get();
        return view('backend.ilot.copro.coproEdit', [
            'copro' => $copro,
            'copros' => $copros,
            'batiments' => $batiments,
            'photo_principale'=>'required|image|max:1999',
        ]);
    }

}

