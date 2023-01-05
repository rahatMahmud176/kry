<?php

namespace App\Http\Controllers;

use App\Models\Cash;
use App\Models\Party;
use App\Models\Purchase;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CashController extends Controller
{
    public function cashIn(Request $request)
    {
        Cash::creditCash($request);
        Party::debit($request);
        Alert::toast('Cash in successfully','success');
        return redirect()->back();
    }


    public function payment(Request $request)
    {
        Cash::debitCash($request);
        Party::credit($request);
        Alert::toast('Payment/Expense successfully','success');
        return redirect()->back();
    }

    public function purchase(Request $request)
    { 
        Party::debit($request);
        Purchase::new($request);
        Alert::toast('Purchase successfully','success');
        return redirect()->back();
    }






}
