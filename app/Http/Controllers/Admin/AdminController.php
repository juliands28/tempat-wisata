<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\TravelPackage;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
         $item = TravelPackage::take(4)->get();
        return view('pages.admin.admin',[
            'item' => $item
        ]);
    }
}