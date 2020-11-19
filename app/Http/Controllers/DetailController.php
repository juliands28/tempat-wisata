<?php

namespace App\Http\Controllers;
use App\TravelPackage;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(Request $request, $id)
    {        
       $item = TravelPackage::with(['galleries'])->where('slug', $id)->firstOrFail();
        return view('pages.detail',[
            'item' => $item
        ]);

    }
}