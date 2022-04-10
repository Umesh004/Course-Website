<?php

use App\Http\Controllers\SeriesController;
use App\Models\Series;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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

Route::get('/as', function () {
    $featuredSeries=Series::take(4)->latest()->get();
    return view('front',compact('featuredSeries'));
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/series', [App\Http\Controllers\SeriesController::class, 'index'])->name('series.index');
Route::resource('/series',SeriesController::class);
Route::get('/series/{series}/episodes/{episodeNumber}',[App\Http\Controllers\SeriesController::class,'episode'])->name('series.episode');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

