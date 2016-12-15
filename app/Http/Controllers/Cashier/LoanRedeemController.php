<?php

namespace Cooperative\Http\Controllers\Cashier;

use Illuminate\Http\Request;
use Cooperative\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\FormBuilder;

class LoanRedeemController extends Controller
{
    public function LoanRedeem(FormBuilder $formBuilder){
            $form = $formBuilder->Create('Cooperative\Forms\Cashier\LoanRedeemForm', ['method' => 'POST', 'url' => route('web.LoanRedeem')]);
            return view('Layout.Cashier.LoanRedeem',compact('form'));
    }
}
