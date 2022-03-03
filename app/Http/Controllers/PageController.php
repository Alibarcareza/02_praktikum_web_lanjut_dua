<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return"Selamat Datang";
    }
    public function about(){
        return "Muhammad Ali Reza-2041720182";
    }
    public function articles($id){
        return "Halaman Artikel dengan ID " . $id;
    }
}
