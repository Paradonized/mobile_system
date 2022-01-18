<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phonemodel;

class PhonemodelController extends Controller
{
    public function indexPhonemodel()
    {
        $phonemodels=Phonemodel::all();
        return view('index.phonemodel', ['allPhonemodels' =>$phonemodels]);
    }
}
