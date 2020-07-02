<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function create(){

        $date = date('Y-m-d');

        return view('create.create', compact('date'));
    }
}
