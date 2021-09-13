<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicsController extends Controller
{
   public function index() {
        $data= [
            'cardsData' => config('comics'),
            
        ];
        return view('home',$data);
        
    }
}
