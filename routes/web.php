<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Intervention\Image\Facades\Image;
use Spatie\Browsershot\Browsershot;

Route::get('/', function () {
    return Image::make(
        Browsershot::html('<h1>Webwide</h1>')->noSandbox()->screenshot()
    )->response('jpg');
});
