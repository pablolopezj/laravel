<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class SimplePost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'post:simple-request';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make a simple post request';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $response = Http::timeout(2)->post('https://atomic.incfile.com/fakepost');
        dd($response->successful());
    }
}
