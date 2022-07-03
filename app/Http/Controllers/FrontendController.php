<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductEnquiry;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
public function home(){
    return view('frontend.home');
}
public function profile(){
    return view('frontend.profile');
}
public function services(){
    return view('frontend.service');
}
public function consultancy_sectors(){
    return view('frontend.consultancy_sectors');
}
public function contact(){
    return view('frontend.contact');
}
public function client(){
    return view('frontend.client');
}
  
}
