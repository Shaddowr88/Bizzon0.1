<?php

namespace App\Http\Controllers;

use App\Batiment;
use Illuminate\Http\Request;

class BatimentController extends Controller
{
    //
    public function index(){
    return view('batiments.batiment');
    }

}
