<?php

namespace Cooperative\Forms\Cashier;

use Kris\LaravelFormBuilder\Form;

class LoanRedeemForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('memberid','text', [
                    'wrapper' => ['class' => 'form-group'],
                    'label'=>'Enter member id',
                    'attr' => ['class' => 'form-control field-input'],
                    'rules'=>['required'],
                    'errors' => ['class' => 'text-danger col-md-offset-4'],
                    'label_attr'=>['data-error'=>"wrong", 'data-success'=>"right"]
                ]
            )

            ->add('loanid','text', [
                    'wrapper' => ['class' => 'form-group'],
                    'label'=>'Loan id',
                    'attr' => ['class' => 'form-control field-input'],
                    'rules'=>['required'],
                    'errors' => ['class' => 'text-danger col-md-offset-4']

                ]
            )

            ->add('membername','text', [
                    'wrapper' => ['class' => 'form-group'],
                    'label'=>'Member name',
                    'attr' => ['class' => 'form-control field-input'],
                    'rules'=>['required']

                ]
            )

            ->add('lastinstallmentpay','number', [
                    'wrapper' => ['class' => 'form-group'],
                    'label'=>'Last installment pay',
                    'attr' => ['class' => 'form-control field-input'],
                    'rules'=>['required']

                ]
            )

            ->add('sourcebalance','number', [
                    'wrapper' => ['class' => 'form-group'],
                    'label'=>'Source member Balance',
                    'attr' => ['class' => 'form-control field-input'],
                    'rules'=>['required']

                ]
            )

            ->add('installmentdate','date', [
                    'wrapper' => ['class' => 'form-group'],
                    'label'=>'Last installment pay date',
                    'attr' => ['class' => 'form-control field-input'],
                    'rules'=>['required']

                ]
            )

            ->add('payinstallment','number', [
                    'wrapper' => ['class' => 'form-group'],
                    'label'=>'Pay loan installment',
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

            ->add('remarks','text', [
                    'wrapper' => ['class' => 'form-group'],
                    'label'=>'Remarks if any',
                    'attr' => ['class' => 'form-control field-input'],
                    'rules'=>['required']

                ]
            )

            ->add('OK','submit',['attr'=>['class'=>'btn btn-danger']]);

    }
}
