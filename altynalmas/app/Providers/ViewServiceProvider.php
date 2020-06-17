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
        $subject = file_get_contents('https://nationalbank.kz/rss/get_rates.cfm');
        $pattern = '/<title>USD<\/title><description>(.+?)<\/description>/u';
        $result = [];
        preg_match_all($pattern, $subject, $result);
        $usd = $result[1][0];
        
        view()->share('usd', $usd );


        // $subject = file_get_contents('https://www.kitco.com/');
        // $pattern = '/<tr id="row-USD" class="row">  <td id="lgq-bid">(.+?)<\/td><td id="lgq-ask">(.+?)<\/td>    <td class="red" id="lgq-chg">(.+?)<\/td>    <td class="red" id="lgq-chg-percent">(.+?)<\/td>    <\/tr>/u';
        // $result = [];
        // preg_match_all($pattern, $subject, $result);
        // $usd = $result[1][0];
        
        // view()->share('usd', $usd );


    }
}
