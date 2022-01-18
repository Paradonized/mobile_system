<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        //Get data from DB in here and pass it to the view
    
        return view('index.index', [
            'title' => 'Mobile System Database',
            'text' => '<p>Great selection of phones, models and brands!</p>'
        ]);
    }
}
