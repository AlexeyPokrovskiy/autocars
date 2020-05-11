<?php

namespace App\Models\Parser;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;
use App\Models\Blog\Blog as Blog;

class BlogParser extends Model
{

    public $url;




//    public function __construct($url)
//    {
//        $this->url = $url;
//        $html = file_get_contents($this->url);
//        $this->crawler = new Crawler(null, $this->url);
//        $this->crawler->addHtmlContent($html, 'UTF-8');
//
//    }

    public function index(){
        $link = "https://www.autocentre.ua/news";
        $html = file_get_contents($link);

        // Create new instance for parser.
        $crawler = new Crawler(null, $link);
        $crawler->addHtmlContent($html, 'UTF-8');

        $result = $crawler->filter(".items.blog-loop .item")->each(function (Crawler $node, $i) {
            return $this->getContent($node->extract('href')[0]);
        });

        dump("autocentre.ua");
        dump($result);
    }

    public function getContent( $link)
    {
        // Get html remote text.
        @$html = file_get_contents($link);

        if(!$html){
            return "No html:" . $link;
        }

        // Create new instance for parser.
        $crawler = new Crawler(null, $link);
        $crawler->addHtmlContent($html, 'UTF-8');

        if(!empty($crawler->filter("h1")->text())){
            $title = $crawler->filter("h1")->text();
        }else{
            return "No title:" . $link;
        }

        $article = Blog::where('title', '=', $title)->first();

        if($article){
            return "EXIST:" . $link;
        }

        $body = $crawler->filter(".content-rules p")->each(function (Crawler $node, $i) {
            return $node->text()."<br><br>";
        });
        $body = implode($body);

        $img  =  $crawler->filter(".print-img")->first()->extract('src');
        $desc  =  $crawler->filter(".content-rules p")->text();

        if(isset($img[0])){
            $img = $img[0];
        }else{
            $img = "/images/blog/blog-2.jpg";
        }


        $content = [
            "published" => 1,
            'title' => $title,
            "meta_title" => $title,
            "meta_description" => mb_substr($desc,0, 200)."...",
            "short_description" => mb_substr($desc,0, 300)."...",
            "description" => $body,
            'slug' => "",
            'image' => $img,
        ];

        $article = Blog::create($content);


        return $link;

    }



}
