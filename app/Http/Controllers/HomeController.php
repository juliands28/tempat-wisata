<?php

namespace App\Http\Controllers;

use App\TravelPackage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
        $item = TravelPackage::get();
        return view('pages.home',[
            'item' => $item
        ]);
    }
}