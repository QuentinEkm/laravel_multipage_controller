<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultipageController extends Controller
{
    public function home() {
        return view ("pages.home");
    }
    public function about() {
        return view ("pages.about");
    }
    public function products() {
        return view ("pages.products");
    }
    public function store() {
        return view ("pages.store");
    }
}
