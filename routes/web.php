<?php

use App\Http\Livewire\{TestComponent,Chart};
use Illuminate\Support\Facades\Redirect;
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

Route::get('/', function () {
    return redirect('/overview');
});
Route::get('/overview', TestComponent::class);

Route::get('/new', function(){
    return view('new');
});


