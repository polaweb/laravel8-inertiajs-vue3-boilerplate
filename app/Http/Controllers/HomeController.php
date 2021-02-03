<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia; // use Inertia class

class HomeController extends Controller{

    public function index(){
        
        return Inertia::render('Home/Index', [

            'name'=>'World!'

        ]);
    }

    public function about(){ 
        
        return Inertia::render('About/Index'); 
    
    }

}