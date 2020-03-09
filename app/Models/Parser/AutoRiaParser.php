<?php

namespace App\Models\Parser;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\DomCrawler\Crawler;
use App\Models\Ref\Mark as Mark;
use App\Models\Ref\ModelCar as ModelCar;
use App\Models\Ref\CoreRef as CoreRef;
use App\Models\Ref\Fuel as Fuel;
use App\Models\Auto\Auto as Auto;
use App\Models\Auto\AutoFailed as AutoFailed;

class AutoRiaParser extends Model
{
    public $url;


    public $parseFailedMessage = array();
    public $crawler;

    //Массив основных характеристик
    public $baseInfo;

    public function __construct($url)
    {
        $this->url = $url;
        $html = file_get_contents($this->url);
        $this->crawler = new Crawler(null, $this->url);
        $this->crawler->addHtmlContent($html, 'UTF-8');
        $this->baseInfo();

    }


    public function runParse(){
        $data = array(
            "type" => 1,
            "core_id" =>  $this->getBrand(),
            "region_id" => 1,
            "cities_id" => 1,
            "price" => $this->baseInfo->offers->price,
            "phone" => $this->getPhone(),
            "platform_id" => 1,
            "platform_url" => $this->url,
            "status_id" => 1,
            "customs_id" => 1,
            "state_id" => 1,
            "is_metallic" => 1,
            "year" => $this->baseInfo->productionDate,
            "vin" => "",
            "run" => $this->getRun(),
            "fuel_id" => $this->getFuel(),
            "img" => $this->getImg(),
            "images" => $this->getImages(),
            "equipment" => 1,
            "description" => $this->getDescription(),
            "wheel" => 1,
        );


        $this->createAuto($data);
        return $data;
    }
    public function createAuto($data){
        $auto = Auto::where('platform_url',$data['platform_url'])->first();
        $autoFailed = AutoFailed::where('platform_url',$data['platform_url'])->first();

        if(!$auto and !$autoFailed){
            if(!$this->parseFailedMessage){
                //Все удачно
                Auto::create($data);
            }else{
                //запись в таблицу неудачного парса
                $data['message'] = json_encode($this->parseFailedMessage);
                AutoFailed::create($data);

            }
        }


    }
    public function baseInfo(){
        $result = $this->crawler->filter("script")->each(function (Crawler $node, $i) {
           $inner_text  = json_decode($node->text());
           if($inner_text and array_key_exists("name",$inner_text)){
               $this->baseInfo = $inner_text;
           }
        });
    }

    public function getBrand(){

        //  тип кузова
        $body_type = mb_convert_encoding($this->baseInfo->bodyType, 'UTF-8', 'HTML-ENTITIES');
        //  обьем двигателя
        $volume = $this->getVolume();


        $mark = Mark::where("name","Like","%".explode(" ",$this->baseInfo->brand->name)[0]."%")->first();
        $mark_id = isset($mark->id)?$mark->id:0;
        $model = ModelCar::where("name","Like","%".explode(" ",$this->baseInfo->model)[0]."%")->first();
        $model_id = isset($model->id)?$model->id:0;

            $core_id = CoreRef::where("mark_id",$mark_id)
                ->where("model_id",$model_id)
                ->where("body","LIKE","%".$body_type."%")
                ->where("volume",$volume)
                ->where("year_from","<=",$this->baseInfo->productionDate)
                ->where("year_to",">=",$this->baseInfo->productionDate)
                ->first();

//        dump($body_type);
//        dump($volume);
//        dump($this->baseInfo->productionDate);
//        dump($mark_id);
//        dd($model_id);
         $core_id = isset($core_id->id)?$core_id->id:0;

        if(!$core_id){
            $this->parseFailedMessage[] = (__DIR__."|".__FUNCTION__."|".__LINE__);
        }



        return $core_id;

    }

    public function getRun(){
        $run = $this->crawler->filter(".base-information span")->text();
        if(!$run){
            $this->parseFailedMessage[] = (__DIR__."|".__FUNCTION__."|".__LINE__);
        }
        return $run;
    }

    public function getDescription(){
        $description =  $this->crawler->filter("#full-description")->each(function (Crawler $node, $i) {
            return $node->html();
        });

        $description = $description?$description[0]:"";
        return $description;
    }

    public function getImages(){
        $images = $this->crawler->filter(".carousel-inner img")->each(function (Crawler $node, $i) {
           return str_replace("s.jpg","f.jpg",$node->extract('src'));
        });


        if(!$images){
            $this->parseFailedMessage[] = (__DIR__."|".__FUNCTION__."|".__LINE__);
        }

        return json_encode($images);
    }

    public function getImg(){
        $img = $this->crawler->filter('.carousel-inner img')->first()->extract('src');

        if(!$img){
            $this->parseFailedMessage[] = (__DIR__."|".__FUNCTION__."|".__LINE__);
        }

        return $img[0];
    }


    public function getYear(){
       $array_search = $this->crawler->filter('script')->extract(array('data-year'));
       $year = 0;

       foreach ($array_search as $item){
           if($item){
               $year = $item;
           }
       }

        if(!$year){
            $this->parseFailedMessage[] = (__DIR__."|".__FUNCTION__."|".__LINE__);
        }
      return $year;
    }

    public function getVolume(){
        $array_search = $this->crawler->filter('script')->extract(array('data-engine-volume'));
        $volume = 0;

        foreach ($array_search as $item){
            if($item){
                $volume = $item;
            }
        }

        if(!$volume){
            $this->parseFailedMessage[] = (__DIR__."|".__FUNCTION__."|".__LINE__);
        }

        return $volume;
    }

    public function getFuel(){
        $array_search = $this->crawler->filter('script')->extract(array('data-dfp-data'));
        $fuel = false;

        foreach ($array_search as $item){
            if($item){
                $fuel = json_decode($item);

                if(isset($fuel->fuel)){
                    $fuel=$fuel->fuel;
                }else{
                    $fuel= false;
                }

            }
        }


        if(!$fuel){
            $this->parseFailedMessage[] = (__DIR__."|".__FUNCTION__."|".__LINE__);
            return 0;
        }else{
            $fuel_result = Fuel::where('code',$fuel)->first()->id;
            return $fuel_result;
        }

    }

    public function getPhone(){
        $phone = $this->crawler->filter('.phone')->attr("data-phone-number");
        return $phone;
    }

}
