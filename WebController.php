<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
public function dashboard()
{
return view('dashboard'); //here 'home' is blade name
}

public function TourPackage()
{
return view('TourPackage'); //here 'home' is blade name
}
}