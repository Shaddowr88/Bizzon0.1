<?php

namespace App\Http\Controllers\Proprio;


use App\budget;
use App\Models\Copros;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
       $c=Copros::all();
       dd($c);
    }

}
