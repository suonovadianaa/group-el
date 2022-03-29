<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index()
    {
        return view("index");
    
    }
    public function obaut()
    {
        return view("obaut");
    
    }
     public function contact()
    {
        return view("contact");
    
    }
    public function contact1()
    {
        return view("contact1");
    
    }
    public function innovations()
    {
        return view("innovations");
    
    } 
    public function office()
    {
        return view("office");
    
    }
     public function personnel()
    {
        return view("personnel");
    
    }
    public function product()
    {
        return view("product");
    
    }
    public function proizvod()
    {
        return view("proizvod");
    
    } 
    public function ruk()
    {
        return view("ruk");
    
    }
     public function search()
    {
        return view("search");
    
    }
    public function stazh()
    {
        return view("stazh");
    
    }
    public function education()
    {
        return view("education");
    
    }
    

}

