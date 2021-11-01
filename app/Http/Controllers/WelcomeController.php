<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        
        return view('welcome', [
        'title' => 'Our products',
        'products' => $products     
    ]);
}
}