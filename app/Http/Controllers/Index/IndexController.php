<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $response['reviews']=Review::all();
        return view('Land Page.index')->with($response);
    }
}
