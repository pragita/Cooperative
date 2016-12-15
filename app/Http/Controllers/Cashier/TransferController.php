<?php

namespace Cooperative\Http\Controllers\Cashier;

use Illuminate\Http\Request;
use Cooperative\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\FormBuilder;

class TransferController extends Controller
{
    public function Transfer(FormBuilder $formBuilder){
            $form = $formBuilder->Create('Cooperative\Forms\Cashier\TransferForm', ['method' => 'POST', 'url' => route('web.Transfer')]);
            return view('Layout.Cashier.Transfer',compact('form'));
        }
}
