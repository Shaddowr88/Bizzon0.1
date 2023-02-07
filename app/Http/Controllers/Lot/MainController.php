<?php

namespace App\Http\Controllers\Lot;

use App\Appartement;
use App\Batiment;
use App\copros;
use App\depense;
use App\Http\Controllers\Controller;
use App\LabelBudget;
use App\partie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;
//use Illuminate\Database\Eloquent\SoftDeletes;

class MainController extends Controller
{
    public function index()
    {
        $batiment = DB::table('batiments')
            ->orderBy('created_at','desc')->paginate(8);

        dd($batiment);
        return view('backend.ilot.index', ['batiments'=>$batiment]);
    }

//    Cree de nouveaux batiments
    public function add() {
        $batiments = Batiment::all();
        $appartements = Appartement::all();
        $copros = copros::all();
        $parties = partie::all();
        return view('backend.ilot.add', [
            'batiments' => $batiments,
            'appartements' => $appartements,
            'parties' => $parties,
            'copros' => $copros,

        ]);
    }

//    sauvegarde BD nouveaux batiments
    public function store(Request $request){
        $request->validate([
            'nom' => 'required|max:25',
            'numero'=> 'required|max:3','adresse'=> 'required|max:25',
            'batiment_id','copro_id', 'photo_principale'=>'required|image|max:1999'
        ]);

        if ($request->hasFile('photo_principale')) {
            $fileName = $request->file('photo_principale')->getClientOriginalName();
            $request->file('photo_principale')->storeAs('public/uploads', $fileName);
            $img = Image::make($request->file('photo_principale')->getRealPath());
            $img->insert(public_path('img/favicon.png'), 'bottom-right', 10, 10);
//            dd($fileName);
            $img->save('storage/uploads/'. $fileName);
        }

        $batiments = new Batiment();
        $batiments->nom = $request->nom;
        $batiments->numero = $request->numero;
        $batiments->adresse = $request->adresse;
        $batiments->copro_id = $request->copro_id;
        $batiments->photo_principale = $fileName;
        $batiments->save();
        if($request->parties) {
            foreach ($request->parties as $id) {
                $batiments->parties()->attach($id);
            }
        }
        return redirect()
            ->route('backend_viewByCopro',['id'=>$batiments->copro_id])
            ->with('notice', 'le Batiment' .$batiments->nom. 'a bien été ajouté');
    }

    public function edit (Request $request){
        $batiments = Batiment::all();
        $parties = partie::all();
        $batiment = Batiment::find($request->id);
        $parties_id=[];
        foreach ($batiment->parties as $p) {
            $parties_id[]=$p->id;
        }
        return view('backend.ilot.edit', [
            'batiment' => $batiment,
            'batiments' => $batiments,
            'parties' => $parties,
            'parties_id' => $parties_id,
            'photo_principale'=>'required|image|max:1999',
        ]);
    }
//update
    public function update (Request $request){
        $batiments = Batiment::find($request->id);
        $request->validate(['nom',
            'numero',
            'adresse',
            'batiment_id',
            'parties',
            'copro_id',
            'etage',
            ]);
        if ($request->hasFile('photo_principale')) {
            $fileName = $request->file('photo_principale')->getClientOriginalName();
            $request->file('photo_principale')->storeAs('public/uploads', $fileName);
            $img = Image::make($request->file('photo_principale')->getRealPath());
//            $img->insert(public_path('img/favicon.png'), 'bottom-right', 10, 10);
//            dd($fileName);
            $img->save('storage/uploads/'. $fileName);
            $batiments->photo_principale = $fileName;
        }
        $batiments->etage = $request->etage;
        $batiments->nom = $request->nom;
        $batiments->numero = $request->numero;
        $batiments->adresse = $request->adresse;
        $batiments->save();
        $batiments->parties()->sync($request->parties);
        return redirect()->route('backend_viewByCopro',['id'=>$batiments->copro_id])
            ->with('notice','Batiment ' .$batiments->nom. ' a bien été modifié');
    }
//fonction delete
    public function delete(Request $request){
        $batiment = Batiment::find($request->id);
        $batiment->delete ();
        return redirect()->route('backend_viewByCopro',['id'=>$batiment->copro_id])
            ->with('notice','le batiment a été supprimé');
    }

    public function viewByBatiment (Request $request){

        $batiments = Batiment::all();
        $parties = partie::all();
        $batiment = Batiment::find($request->id);
        $parties_id=[];
        foreach ($batiment->parties as $p) {
            $parties_id[]=$p->id;
        }
        return view('backend.ilot.view', ['batiments' => $batiments,
            'batiment' => $batiment,
            'parties_id' => $parties_id,
            'parties' => $parties,
        ]);
    }

    public function viewBySpend (Request $request){
        $speds = Depense::all();
        $labels = LabelBudget::all();
        $sped = Depense::find($request->id);
        $labels_id=[];
        foreach ($sped->Labels as $p) {
            $labels_id[]=$p->id;
        }
        return view('backend.ilot.view', ['speds' => $speds,
            'sped' => $sped,
            'labels_id' => $labels_id,
            ' labels' =>  $labels,
        ]);
    }

}
