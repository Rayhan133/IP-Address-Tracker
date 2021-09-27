<?php

use App\Http\Livewire\Report;
use Illuminate\Support\Facades\Route;
use App\Models\Domain;

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
    $domains = Domain::all();
    return view('dashboard', compact('domains'));
});
Route::get('/report', Report::class)->name("livewire.report");

Route::get('/{name}', function ($name) {
    return $name;
})->name("domain");
