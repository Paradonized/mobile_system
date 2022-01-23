<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;

class PhoneController extends Controller
{
    public function index(Request $request)
    {
        $phones = Phone::where([
            ['name','!=', Null],
            [function ($query) use ($request){
                if(($term=$request->term)){
                    $query->Where('name','LIKE','%'.$term.'%')->orWhere('year_of_release','LIKE','%'.$term.'%')->get();
                }
            }]
        ])
            ->orderBy("id","desc")
            ->paginate(10);
        return view('index.phones', compact('phones'));    
    }

    public function show($id)
    {
        $phone=Phone::find($id);
        return view('index.viewPhone', ['phone' => $phone]);
    }
}
