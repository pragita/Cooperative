<?php

namespace Cooperative\Forms\Cashier;

use Kris\LaravelFormBuilder\Form;

class DepositForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('accountno','text', [
                    'wrapper' => ['class' => 'form-group'],
                    'label'=>'Account no.',
                    'attr' => ['class' => 'form-control field-input'],
                    'rules'=>['required'],
                    'errors' => ['class' => 'text-danger col-md-offset-4'],
                    'label_attr'=>['data-error'=>"wrong", 'data-success'=>"right"]
                ]
            )

            ->add('name','text', [
                    'wrapper' => ['class' => 'form-group'],
                    'label'=>'Member name',
                    'attr' => ['class' => 'form-control field-input'],
                    'rules'=>['required'],
                    'errors' => ['class' => 'text-danger col-md-offset-4']

                ]
            )

            ->add('accounttype','text', [
                    'wrapper' => ['class' => 'form-group'],
                    'label'=>'Account type',
                    'attr' => ['class' => 'form-control field-input'],
                    'rules'=>['required']

                ]
            )

            ->add('deposit','text', [
                    'wrapper' => ['class' => 'form-group'],
                    'label'=>'Deposit/Withdraw',
                    'attr' => ['class' => 'form-control field-input'],
                    'rules'=>['required']

                ]
            )

            ->add('amount','number', [
                    'wrapper' => ['class' => 'form-group'],
                    'label'=>'Amount',
                    'attr' => ['class' => 'form-control field-input'],
                    'rules'=>['required']

                ]
            )

            ->add('balance','number', [
                    'wrapper' => ['class' => 'form-group'],
                    'label'=>'Balance',
                    'attr' => ['class' => 'form-control field-input'],
                    'rules'=>['required']

                ]
            )

            ->add('date','date', [
                    'wrapper' => ['class' => 'form-group'],
                    'label'=>'Date',
                    'attr' => ['class' => 'form-control field-input'],
                    'rules'=>['required']

                ]
            )

            ->add('OK','submit',['attr'=>['class'=>'btn btn-danger']]);

    }
}
