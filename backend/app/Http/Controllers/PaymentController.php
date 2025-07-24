<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function process(Request $request)
    {
        // TODO: intégrer le paiement Stripe ici
        return response()->json(['status' => 'paiement en attente']);
    }
}
