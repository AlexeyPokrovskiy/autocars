<?php

namespace App\Http\Controllers;

use App\Models\Auto\Auto;
use App\Models\Ref\Mark;
use App\Models\Ref\ModelCar;
use App\Models\Ref\City;
use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;

class ListingController extends Controller
{
    public function index(){

        $cars = Auto::with('region','city','core','fuel','status','model')->orderBy("created_at","desc")->paginate(20);

        return view('listing.index',[
            'cars' => $cars,
            'title' => "AutoCar | Car Stock | Бренды Модели Страница №".$cars->currentPage(),
            'h1' => "Поиск авто Легковые",
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
            'h1' => "Продажа ".$mark_obj->name,
            'meta_description' => "Автобазар объявлений о продаже подержанных ".$mark_obj->name." на автобазаре в Украине. На Car-stock легко найти, сравнить и купить бу ".$mark_obj->name." с пробегом любой модели и года."
        ]);
    }

    public function model($mark,$model){

        $mark_obj = Mark::where('code',$mark)->first();
        $model_obj = ModelCar::where('code',$model)->first();

        if(!$mark_obj){
            abort(404);
        }

        //если фейковая модель, то редирект на бренд
        if(!$model_obj){
            return redirect(route('listing.brand', $mark), 301);
        }

        $cars = Auto::with('region','city','core','fuel','status','model')->where("mark_id",$mark_obj->id)->where("model_id",$model_obj->id)->orderBy("created_at","desc")->paginate(20);

        //если если нет тачек в модели редирект в марк с 302
        if(!$cars){
            return redirect(route('listing.brand', $mark), 302);
        }

        return view('listing.index',[
            'cars' => $cars,
            'title' => "AutoCar | Car Stock | Продажа ".$mark_obj->name." ".$model_obj->name." бу в Украине: купить подержанные ".$mark_obj->name." ".$model_obj->name." с пробегом",
            'h1' => "Продажа ".$mark_obj->name." ".$model_obj->name,
            'meta_description' => "Автобазар объявлений о продаже подержанных ".$mark_obj->name." ".$model_obj->name." на автобазаре в Украине. На Car-stock легко найти, сравнить и купить бу ".$mark_obj->name." ".$model_obj->name." с пробегом любой модели и года."
        ]);
    }

    public function city($city){

        $city_obj = City::where('city_id',$city)->first();

        if(!$city_obj){
            abort(404);
        }

        $cars = Auto::with('region','city','core','fuel','status','model')->where("cities_id",$city_obj->city_id)->orderBy("created_at","desc")->paginate(20);


        return view('listing.index',[
            'cars' => $cars,
            'title' => "AutoCar | Car Stock | Продажа в ".$city_obj->title_ru." бу в Украине: купить подержанные ".$city_obj->region_ru." ".$city_obj->title_ru." с пробегом",
            'h1' => "Купить авто  в ".$city_obj->title_ru,
            'meta_description' => "Автобазар объявлений о продаже подержанных ".$city_obj->region_ru." ".$city_obj->title_ru." на автобазаре в Украине. На Car-stock легко найти, сравнить и купить бу ".$city_obj->title_ru." с пробегом любой модели и года."
        ]);
    }

}
