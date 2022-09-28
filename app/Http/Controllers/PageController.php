<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
class PageController extends Controller
{
    public function index(){
       $films = Movie::all();
       foreach ($films as $film){
        echo $film->title . '<br>';
       }
    }
}
