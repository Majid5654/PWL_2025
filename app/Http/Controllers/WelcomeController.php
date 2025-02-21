<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        return 'Hello World dari controller';
    }
    
    public function greeting(){ 
        return view('blog.hello') 
        ->with('name','Andi') 
        ->with('occupation','Astronaut'); 
        } 
}
