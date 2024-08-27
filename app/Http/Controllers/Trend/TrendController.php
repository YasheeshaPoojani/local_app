<?php

namespace App\Http\Controllers\Trend;

use App\Http\Controllers\Controller;
use App\Models\Aromatics;
use App\Models\Bags;
use App\Models\Bakers;
use App\Models\Caterings;
use App\Models\Flowers;
use App\Models\Furnis;
use App\Models\Kids;
use App\Models\Musics;
use Illuminate\Http\Request;

class TrendController extends Controller
{
    public function index(){

        //catering service
        $response['catering'] = Caterings::inRandomOrder()->first();

        //bakery items
        $response['bakery']=Bakers::inRandomOrder()->first();

        //Furniture
        $response['fur']=Furnis::inRandomOrder()->first();

        //kids
        $response['kids']=Kids::inRandomOrder()->first();

        //Aromatic
        $response['aroma']=Aromatics::inRandomOrder()->first();

        //bags
        $response['bag']=Bags::inRandomOrder()->first();

        //flowers
        $response['flower']=Flowers::inRandomOrder()->first();

        //Music
        $response['music']=Musics::inRandomOrder()->first();

        return view('trend1')->with($response);
    }
}
