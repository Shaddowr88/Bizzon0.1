<?php

namespace App\Http\Controllers\Lot;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    //
//
    public function index()
    {
        return view('backend.ilot.book.index');
    }


    public function prestataire()
    {
        return view('backend.ilot.book.prestataire');
    }

    public function syndic()
    {
        return view('backend.ilot.book.syndic');
    }

    public function other()
    {
        return view('backend.ilot.book.other');
    }

}
