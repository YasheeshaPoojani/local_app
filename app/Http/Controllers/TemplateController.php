<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index()
    {
    	return view('categories.cat1');
    }

    public function index1()
    {
    	return view('categories.cat2');
    }

    public function index2()
    {
    	return view('categories.cat3');
    }

    public function index3()
    {
    	return view('categories.cat4');
    }

    public function index4()
    {
    	return view('categories.cat5');
    }

    public function index5()
    {
    	return view('categories.cat11');
    }

     


    

    

}
