<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function foodBeverage() {
        $products = [
            ['name' => 'Coca-cola'],
            ['name' => 'Pizza'],
            ['name' => 'Seblak'],
            ['name' => 'Mie Goreng'],
            ['name' => 'Indomie'],
            ['name' => 'Kopi Luwak'],
            ['name' => 'Kopi Pulpa']
        ];
        return view('products', ['category' => 'Food & Beverage', 'products' => $products]);
    }

    public function beautyHealth() {
        $products = [
            ['name' => 'LifeBoy'],
            ['name' => 'Nivea'],
            ['name' => 'Head & Shoulders'],
            ['name' => 'Pantene'],
            ['name' => 'Garnier'],
            ['name' => 'Nutrisa']
        ];
        return view('products', ['category' => 'Beauty & Health', 'products' => $products]);
    }

    public function homeCare() {
        $products = [
            ['name' => 'Sapu'],
            ['name' => 'Pel'],
            ['name' => 'Kemoceng'],
            ['name' => 'Vacuum Cleaner']
        ];
        return view('products', ['category' => 'Home Care', 'products' => $products]);
    }

    public function babyKid() {
        $products = [
            ['name' => 'Cussion Baby'],
            ['name' => 'Minyak Telon'],
            ['name' => 'Bedak Bayi']
        ];
        return view('products', ['category' => 'Baby & Kid', 'products' => $products]);
    }
}
