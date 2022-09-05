<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;
use \Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class UpdateController extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'minutes:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is the crob job';

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
     * @return int
     */
    public function handle()
    {
        $products = Product::all();
        Log::info('KDNKANKDNKNKANKNSKKNS');
        foreach ($products as $product) {
            $date2 = Carbon::now()->toDateString();
            $date1 = Carbon::parse($product->ending_date)->toDateString();
            if (date($date2) >= $date1 &&  $product->ended_bid == NULL) {
                $product->ended_bid = 1;
                $product->save();

                return 0;
            } else {
                // Log::info(strval(date(($product->ending_date))));

            }
        }
    }
}
