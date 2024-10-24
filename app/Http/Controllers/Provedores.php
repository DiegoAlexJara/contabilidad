<?php

namespace App\Http\Controllers;

use App\Models\Suppliers;
use Illuminate\Http\Request;

class Provedores extends Controller
{
    function index(){
        $provedors = Suppliers::all();
        return view('provedores.index', compact('provedors'));
    }
    function create(){
        return view('provedores.create');
    }
}
