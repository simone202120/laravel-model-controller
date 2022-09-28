<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
class PageController extends Controller
{
    public function index(){
       $films = Movie::all();
       var_dump($films);
       die();
    }
}
