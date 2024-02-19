<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\MessageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/register', [RegisterController::class, 'index'])->name('register');
//Route::resource('users', UserController::class);

Route::get('/login', [ProfileController::class, 'index'])->name('login');


// Route::get('accounts/index', [AccountController::class, 'index'])->name('accounts.index');
// Route::resource('accounts', AccountController::class);

Route::middleware(['auth', 'verified'])
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');
        Route::resource('accounts', AccountController::class)->parameters([
            'accounts' => 'account:id',
        ]);
        // Route::resource('types', TypeController::class);
        /*Route::resource('types', TypeController::class)->parameters([
        'types' => 'type:slug',
    ]);
    Route::resource('technologies', TechnologyController::class)->parameters([
        'technologies' => 'technology:slug',
    ]);*/
    });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::fallback(function () {
    return redirect()->route('admin.dashboard');
});
