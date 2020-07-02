<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
     
       $data['name'] = "Moshiur Rhaman";
       $data['roll'] = 2382;
       $data['age'] = 24;
       $data['subject'] = ['Bangla','English','Arabic','Farcy'];
       $data['class'] = ['one','Two','three','four','five','Six','Seven','Eight','Nine','Ten'];

  
      return view('home.index',$data);
    }
    
}
