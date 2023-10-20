<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;

class AdsController extends Controller
{
    public function index()
    {
        $context = ['ads' => Ad::latest()->get()];
        return view('index', $context);
    }

    public function detail(Ad $ad)
    {
        $context = ['ad' => $ad];
        return view('detail', $context);
    }
}
