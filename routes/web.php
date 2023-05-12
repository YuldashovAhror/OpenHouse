<?php

use App\Http\Controllers\Dashboard\BuildController;
use App\Http\Controllers\Dashboard\FeedbackController as DashboardFeedbackController;
use App\Http\Controllers\Dashboard\PartnerController;
use App\Http\Controllers\Dashboard\PlanController;
use App\Http\Controllers\Dashboard\WordController;
use App\Http\Controllers\Front\FeedbackController;
use App\Http\Controllers\Front\WelcomeController;
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
Route::get('/languages/{loc}', function ($loc) {
    if (in_array($loc, ['en', 'ru', 'uz'])) {
        session()->put('locale', $loc);
    }
    return redirect()->back();
});

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('dashboard/plan', PlanController::class);
Route::resource('dashboard/partner', PartnerController::class);
Route::resource('dashboard/build', BuildController::class);
Route::get('dashboar/words', [WordController::class, 'index'])->name('words.index');
Route::get('dashboard/feedback', [FeedbackController::class, 'store'])->name('feedback.store');
Route::get('dashboard/feedback', [DashboardFeedbackController::class, 'index'])->name('feedback.index');
Route::delete('dashboard/feedback/{id}', [DashboardFeedbackController::class, 'destroy'])->name('feedback.destroy');

require __DIR__.'/auth.php';
