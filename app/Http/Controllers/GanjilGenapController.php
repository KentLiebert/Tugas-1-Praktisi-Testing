<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GanjilGenapController extends Controller
{
    public function index()
    {
        return view('ganjil_genap');
    }

    public function check(Request $request)
    {
        $request->validate(['number' => 'required|integer']);

        $number = $request->input('number');
        $isEven = $number % 2 === 0;

        return view('ganjil_genap', compact('number', 'isEven'));
    }
}
