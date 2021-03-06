<?php

namespace App\Http\Controllers;

use App\Models\Auto\Auto;
use App\Models\Ref\Mark;
use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;

class HomeController extends Controller
{
    public function index(){
        $cars = Auto::LastAuto(6)->get();
        $marks = Mark::orderBy("is_popular","desc")->get();

        return view('home.home',[
            'cars'=>$cars,
            'marks'=>$marks
        ]);


    }



    public function test(){
        $parser = new \App\Models\Parser\AutoRiaParser("https://auto.ria.com/auto_geely_emgrand_7_ec7_26934027.html");
        $parser->runParse();
    }

    public function test2(){

        $page="https://auto.ria.com/search/?price.currency=1&sort[0].order=dates.created.desc&abroad.not=0&custom.not=1&page=1&size=20";
        $html = file_get_contents($page);
        $crawler = new Crawler(null, $page);
        $crawler->addHtmlContent($html, 'UTF-8');

        $result = $crawler->filter(".ticket-item .ticket-title a")->extract('href');
        foreach ($result as $item){
            $parser = new \App\Models\Parser\AutoRiaParser($item);
            $parser->runParse();
        }
        dd("без проблем");


    }

    public function test3(){
        \App\Jobs\StartParseAvito::dispatch();
    }
    public function test4(){
        $parser = new \App\Models\Parser\BlogParser();
        $parser->index();
    }
}
