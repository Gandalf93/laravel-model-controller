<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicsController extends Controller
{
    public function index() {
        
        $comics = Comic::all();
        // dd($comics);
       

        return view('home', $comics);
    }
}