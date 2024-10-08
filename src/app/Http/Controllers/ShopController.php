<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function show($shop_id)
    {
        $shop = Shop::findOrFail($shop_id);  
        return view('shops.show', compact('shop'));  
    }
}
