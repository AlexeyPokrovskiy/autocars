<?php

namespace App\Http\Controllers;

use App\Models\Auto\Auto;

use App\Models\Ref\CoreRef;
use App\Models\Ref\Mark;
use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;

class CarController extends Controller
{
    public function index($id){

        $car = Auto::where('id',$id)->first();

        return redirect("/auto/".$car->slug, 301);
    }

    public function showCar($slug){

        $car = Auto::with('core','fuel','status','model','transmission')->where('slug',$slug)->first();

        if(!$car){
            abort(404);
        }
        $images = json_decode($car->images);

        //похожие авто
        $car_similar = Auto::with('core')->where('model_id',$car->model_id)->where('id',"!=",$car->id)->limit(10)->get();

        return view('auto.detail',[
            'car'=>$car,
            'images'=>$images,
            'car_similar'=>$car_similar
        ]);
    }



}
