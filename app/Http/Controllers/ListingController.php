<?php

namespace App\Http\Controllers;

use App\Models\Auto\Auto;
use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;

class ListingController extends Controller
{
    public function index(){

        $cars = Auto::with('core','fuel','status','model')->paginate(20);

        return view('listing.index',[
            'cars'=>$cars,
        ]);
//        return view('listing.index');
    }


}
