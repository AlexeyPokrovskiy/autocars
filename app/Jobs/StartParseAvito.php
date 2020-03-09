<?php

namespace App\Jobs;


use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Models\Parser\AutoRiaParser;
use Symfony\Component\DomCrawler\Crawler;

class StartParseAvito implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 1;


    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $page="https://auto.ria.com/search/?price.currency=1&sort[0].order=dates.created.desc&abroad.not=0&custom.not=1&page=0&size=20";
        $html = file_get_contents($page);
        $crawler = new Crawler(null, $page);
        $crawler->addHtmlContent($html, 'UTF-8');

        $result = $crawler->filter(".ticket-item .ticket-title a")->extract('href');
        foreach ($result as $item){
            \App\Jobs\ParseAvito::dispatch($item);
        }
        \App\Jobs\StartParseAvito::dispatch()->delay(now()->addMinutes());
    }


    public function failed(Exception $exception){
        info(__CLASS__." error");
    }
}
