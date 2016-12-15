<?php

namespace Cooperative\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function Search(){
        return view('Layout.Search');
    }
}
