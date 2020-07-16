<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
//        if($subject = file_get_contents('https://nationalbank.kz/rss/get_rates.cfm')){
//            $subject = file_get_contents('https://nationalbank.kz/rss/get_rates.cfm');
//            $pattern = '/<title>USD<\/title><description>(.+?)<\/description>/u';
//            $result = [];
//            preg_match_all($pattern, $subject, $result);
//            $usd = $result[1][0];
//        }else{
//            $usd = '-';
//        }
        
        // if($subject = file_get_contents('https://www.kitco.com/')){
        //     $subject = file_get_contents('https://www.kitco.com/');
        //     $pattern = '/<tr id="row-USD" class="row">/u';
        //     $blocks = preg_split($pattern, $subject);
        //     unset($blocks[0]);
            
        //     $pattern = '/<td id="lgq-(.+?)">/u';
        //     $blocks = preg_split($pattern, $blocks[1]);
        //     unset($blocks[0]);
        //     $gold = $blocks[1];
        //     $gold = stristr($gold, '</td>', true);
            
        //     $gold_change = $blocks[2];
        //     $pattern = '/<td class="(.+?)" id="lgq-chg-percent">/u';
        //     $gold_change_arr = preg_split($pattern, $gold_change);
        //     unset($blocks[0]);
        //     $gold_change_percent = $gold_change_arr[1];
        //     $gold_change_percent = stristr($gold_change_percent, '</td>', true);
        // }else{
        //     $gold = '-';
        //     $gold_change_percent = '-';
        // }

//        $gold = '-';
//        $gold_change_percent = '-';
//        view()->share('usd', $usd );
//        view()->share('gold', $gold );
//        view()->share('gold_change_percent', $gold_change_percent );
    }
}
