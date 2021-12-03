<?php

use Illuminate\Support\Facades\Route;

//llamar un controlador
use App\Http\Controllers\HomeController;

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

//llamar un controlador el metodo index
Route::get('/', [HomeController::class,'index'] );



Route::get('about',function()
{   
    $name="Manuel";    
    $numbers=[1,2,3,4,5,6,7];
    return view('public.about',compact('name','numbers') );
})->name('about');


