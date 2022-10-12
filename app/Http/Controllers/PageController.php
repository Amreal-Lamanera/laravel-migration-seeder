<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function trains()
    {
        $trains = Train::all();
        $data = compact('trains');
        // dd($movies);
        return view('trains.index', $data);
    }
}
