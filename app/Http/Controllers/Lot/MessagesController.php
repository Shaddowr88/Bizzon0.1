<?php

namespace App\Http\Controllers\Lot;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    //
    public function index()
    {
        return view('backend.ilot.messages.ask');
    }


}
