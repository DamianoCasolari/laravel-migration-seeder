<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {

        // dd(Train::all());
        $trains = Train::all();
        return view('welcome',compact('trains'));
}
    public function about() {
        // dd(Train::all());
        return view('about');
}
    public function contacts() {
        return view('contacs');
}
}