<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllBrands()
    {
        $brands=Brand::all();
        return view('index.brand', ['allBrands' =>$brands]);
    }
}
