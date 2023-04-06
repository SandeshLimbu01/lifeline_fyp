<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function bir()
    {

        return view('frontend.hospitalDetails.bir');
    }

    public function bpkhs()
    {
        return view('frontend.hospitalDetails.bpkhs');
    }

    public function chitwan()
    {
        return view('frontend.hospitalDetails.chitwan');
    }

    public function maharaj()
    {
        return view('frontend.hospitalDetails.maharaj');
    }

    public function narayani()
    {
        return view('frontend.hospitalDetails.narayani');
    }

    public function nepalgunj()
    {
        return view('frontend.hospitalDetails.nepalgunj');
    }
}
