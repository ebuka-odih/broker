<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;




Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
    $this->call('App\Http\Controllers\checkTradeDuration@checkTradeDuration')->everyMinute();

})->purpose('Display an inspiring quote')->hourly();
