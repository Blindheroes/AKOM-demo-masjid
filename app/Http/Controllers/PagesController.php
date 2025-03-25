<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return    response()->json(['message' => 'Hello, welcome to the demo page!']);
    }
}
