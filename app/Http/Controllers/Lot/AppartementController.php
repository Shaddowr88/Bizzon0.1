<?php

namespace App\Http\Controllers\Lot;

use App\Appartement;
use App\Batiment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppartementController extends Controller
{
    //

    public function index()
    {

        $appartements = Appartement::all();
        return view('backend.Users.index', ['appartements' => $appartements]);
    }



}
