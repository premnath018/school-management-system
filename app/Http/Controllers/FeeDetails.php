<?php

namespace App\Http\Controllers;

use App\Models\FeeDetails as ModelsFeeDetails;
use Illuminate\Http\Request;

class FeeDetails extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'paid_amount' => 'required',
        ]);

        $feeDetail = ModelsFeeDetails::create($validatedData);

        return redirect('fee_details')->with('success', 'Fee detail Updated!');
    }

}
