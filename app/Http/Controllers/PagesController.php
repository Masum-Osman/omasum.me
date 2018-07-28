<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }

    public function codes(){
        return view('pages.codes');
    }

    public function planes(){
        return view('pages.planes');
    }

    public function posts(){
        return view('pages.posts');
    }

    public function contact(){              
        return view('pages.contact');
    }  
    
    public function message(){
        return view('pages.message');
    }
                                            //three works to add files. 
                                            //1. add from view-add file-.blade.php
                                            //2. public function (){};
                                            //3. add to route. or route this pages.

   
}
