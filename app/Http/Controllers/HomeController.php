<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
     
       $this->data['name'] = "Moshiur Rhaman";
       $this->data['roll'] = 2382;
       $this->data['age'] = 24;
       $this->data['subject'] = ['Bangla','English','Arabic','Farcy'];
       $this->data['class'] = ['one','Two','three','four','five','Six','Seven','Eight','Nine','Ten'];

  
      return view('home.index',$this->data);
    }
    
}
