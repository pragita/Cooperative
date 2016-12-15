<?php

namespace Cooperative\Forms\Cashier;

use Kris\LaravelFormBuilder\Form;

class TransferForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('sourceid','text', [
                    'wrapper' => ['class' => 'form-group'],
                    'label'=>'Source member id',
                    'attr' => ['class' => 'form-control field-input'],
                    'rules'=>['required'],
                    'errors' => ['class' => 'text-danger col-md-offset-4'],
                    'label_attr'=>['data-error'=>"wrong", 'data-success'=>"right"]
                ]
            )

            ->add('destinationid','text', [
                    'wrapper' => ['class' => 'form-group'],
                    'label'=>'Destination member id',
                    'attr' => ['class' => 'form-control field-input'],
                    'rules'=>['required'],
                    'errors' => ['class' => 'text-danger col-md-offset-4']

                ]
            )

            ->add('sourcename','text', [
                    'wrapper' => ['class' => 'form-group'],
                    'label'=>'source member name',
                    'attr' => ['class' => 'form-control field-input'],
                    'rules'=>['required']

                ]
            )

            ->add('destinationname','text', [
                    'wrapper' => ['class' => 'form-group'],
                    'label'=>'Destination member name',
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

            ->add('destinationbalance','number', [
                    'wrapper' => ['class' => 'form-group'],
                    'label'=>'Destination member balance',
                    'attr' => ['class' => 'form-control field-input'],
                    'rules'=>['required']

                ]
            )

            ->add('select','text', [
                    'wrapper' => ['class' => 'form-group'],
                    'label'=>'Select cash/cheque',
                    'attr' => ['class' => 'form-control field-input'],
                    'rules'=>['required']

                ]
            )

            ->add('transferamt','number', [
                    'wrapper' => ['class' => 'form-group'],
                    'label'=>'Transfer amount',
                    'attr' => ['class' => 'form-control field-input'],
                    'rules'=>['required']

                ]
            )

            ->add('OK','submit',['attr'=>['class'=>'btn btn-danger']]);

    }
}
