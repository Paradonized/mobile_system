<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;

class PhoneController extends Controller
{
    public function indexPhone()
    {
        $phones=Phone::all();
        return view('index.phones', ['allPhones' =>$phones]);
    }

    public function show($id)
    {
        $phone=Phone::find($id);
        return view('index.viewPhone', ['phone' => $phone]);
    }
}
