<?php

namespace App\Jobs;


use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Models\Parser\AutoRiaParser;

class ParseAvito implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 1;

    protected $url;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($url)
    {
        $this->url = $url;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $parser = new AutoRiaParser($this->url);
        $parser->runParse();
    }


    public function failed(Exception $exception){
        info(__CLASS__." error");
    }
}
