<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('auth/user', function () {
    if (auth()->check()) {
        return response()->json([
            'authUser' => auth()->user()
        ]);
    }
});

Route::get('dashboard', [ChatController::class, 'index'])->name('dashboard');
Route::get('chat/{chat}', [ChatController::class, 'show'])->name('chat.show');
Route::get('chat/with/{user}', [ChatController::class, 'chat_with'])->name('chat.with');
Route::get('chat/{user}/get_users', [ChatController::class, 'get_users'])->name('chat.get_users');
//Route::get('chat', [ChatController::class, 'show'])->name('chat.show');
Route::get('chat/{chat}/get_messages', [ChatController::class, 'get_messages'])->name('chat.get_messages');

Route::post('message/sent', [MessageController::class, 'sent'])->name('message.sent');
