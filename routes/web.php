<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\SubscriptionController;

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
    return view('home');
})->name('home');


require __DIR__.'/auth.php';


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('users', [UserController::class]);

Route::get(
    '/participants',
    [ParticipantController::class, 'index']
)->name('participants');

Route::get(
    '/tournaments',
    [TournamentController::class, 'index']
)->name('tournaments');

Route::prefix('subscriptions')->group(function () {
    Route::get('',
        [SubscriptionController::class, 'showForm']
    )->name('subscription.showForm');


    Route::post('subscribe',
        [SubscriptionController::class, 'create']
    )->name('subscription.subscribe');
});    


