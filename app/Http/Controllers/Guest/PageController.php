<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('welcome');
}
    public function about() {
        return view('about');
}
    public function contacts() {
        return view('contacs');
}
}