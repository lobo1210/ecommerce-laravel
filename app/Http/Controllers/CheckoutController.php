<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $carrito = session()->get('carrito', []);
        return view('checkout.index', compact('carrito'));
    }

    public function procesar()
    {
        session()->forget('carrito');

        return redirect()->route('checkout.index')
                         ->with('success', 'Compra realizada con éxito ✅');
    }
}
