<?php

use Illuminate\Support\Facades\Route;

Route::get('/clear', function(){
    \Illuminate\Support\Facades\Artisan::call('optimize:clear');
});
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('booking/service/cron', 'CronController@service')->name('service.cron');
Route::get('job/hire/cron', 'CronController@job')->name('job.cron');


?>







       
