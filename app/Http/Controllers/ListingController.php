<?php

namespace App\Http\Controllers;

use App\Models\Auto\Auto;
use App\Models\Ref\Mark;
use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;

class ListingController extends Controller
{
    public function index(){

        $cars = Auto::with('region','city','core','fuel','status','model')->orderBy("created_at","desc")->paginate(20);

        return view('listing.index',[
            'cars' => $cars,
            'title' => "AutoCar | Car Stock | Бренды Модели Страница №".$cars->currentPage(),
            'meta_description' => "CARSTOCK.COM.UA — купить новые и б/у автомобилей. Cтраница №".$cars->currentPage()." Авторынок онлайн. Автобазар, крупнейший в Украине, все обьявления. Обьявления продажи авто. Каталоги автомобилей и продавцов на карсток."
        ]);
//        return view('listing.index');
    }
    public function brand($mark){

        $mark_obj = Mark::where('code',$mark)->first();

        if(!$mark_obj){
            abort(404);
        }
        $cars = Auto::with('region','city','core','fuel','status','model')->where("mark_id",$mark_obj->id)->orderBy("created_at","desc")->paginate(20);

        return view('listing.index',[
            'cars' => $cars,
            'title' => "AutoCar | Car Stock | Продажа ".$mark_obj->name." бу в Украине: купить подержанные ".$mark_obj->name." с пробегом",
            'meta_description' => "Автобазар объявлений о продаже подержанных ".$mark_obj->name." на автобазаре в Украине. На Car-stock легко найти, сравнить и купить бу ".$mark_obj->name." с пробегом любой модели и года."
        ]);
    }

}
