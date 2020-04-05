<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;

class HomeController extends Controller
{
    public function index(){
        return view('home.home');
    }

    public function test(){
//        \App\Jobs\ParseAvito::dispatch("TEST");
    $parser = new \App\Models\Parser\AutoRiaParser("https://auto.ria.com/auto_bmw_316_26538604.html");
    $parser->runParse();


    }

    public function test2(){
//        \App\Jobs\ParseAvito::dispatch("TEST");
        // $parser = new \App\Models\Parser\AutoRiaParser("https://auto.ria.com/auto_geely_emgrand_7_ec7_26537703.html");
//    $parser->runParse();
        $page="https://auto.ria.com/search/?price.currency=1&sort[0].order=dates.created.desc&abroad.not=0&custom.not=1&page=1&size=20";
        $html = file_get_contents($page);
        $crawler = new Crawler(null, $page);
        $crawler->addHtmlContent($html, 'UTF-8');

        $result = $crawler->filter(".ticket-item .ticket-title a")->extract('href');
        foreach ($result as $item){
//            \App\Jobs\ParseAvito::dispatch($item);
            $parser = new \App\Models\Parser\AutoRiaParser($item);
            $parser->runParse();
        }
        dd("без проблем");


    }

    public function test3(){
        \App\Jobs\StartParseAvito::dispatch();
    }
}
