<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::any('/Search',[
    'as'=>'web.Search',
    'uses'=>'SearchController@Search'

]);

Route::any('/Deposit',[
    'as'=>'web.Deposit',
    'uses'=>'Cashier\DepositController@Deposit'

]);

Route::any('/Transfer',[
    'as'=>'web.Transfer',
    'uses'=>'Cashier\TransferController@Transfer'

]);

Route::any('/LoanRedeem',[
    'as'=>'web.LoanRedeem',
    'uses'=>'Cashier\LoanRedeemController@LoanRedeem'

]);
