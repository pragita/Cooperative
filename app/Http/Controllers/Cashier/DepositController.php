<?php

namespace Cooperative\Http\Controllers\Cashier;

use Illuminate\Http\Request;
use Cooperative\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\FormBuilder;

class DepositController extends Controller
{
    public function Deposit(FormBuilder $formBuilder){
        $form = $formBuilder->Create('Cooperative\Forms\Cashier\DepositForm', ['method' => 'POST', 'url' => route('web.Deposit')]);
        return view('Layout.Cashier.Deposit',compact('form'));
    }
}
