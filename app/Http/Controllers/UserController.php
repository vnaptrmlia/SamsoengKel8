<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    function GetData() {
        $data = Http::get('http://universities.hipolabs.com/search?country=Indonesia')->json();
        return view('univ', ['data' => array_slice($data,0,33)]);
    }
}