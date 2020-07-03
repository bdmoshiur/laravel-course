<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){

      $customers =  DB::table('a_customers')->distinct()->get();
     
dd($customers);
    }
}
