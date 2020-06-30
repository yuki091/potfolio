<?php

namespace App\Http\Controllers;

use App\Model\cloths;
use Illuminate\Http\Request;

class ClothController extends Controller
{
     
    
    public function index()
    {
        $cloth_data = \DB::table('cloths')->get();
        
        return view('home',["cloth_data" => $cloth_data]);
    }
}
