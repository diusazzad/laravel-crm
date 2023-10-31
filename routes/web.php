<?php

use App\Http\Controllers\Admin\AdminAllCloseWon;
use App\Http\Controllers\Admin\AdminCloseDates;
use App\Http\Controllers\Admin\AdminGroupOwnerController;
use App\Http\Controllers\Admin\AdminGroupStage;
use App\Http\Controllers\Admin\AdminOpportunitiesController;
use App\Http\Controllers\Admin\AdminStackedByOwner;
use App\Http\Controllers\Admin\AdminStackedByStage;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::middleware('admin')->prefix('admin')->group(function () {
//     // All of the routes in this group will be protected by the auth middleware and will have the prefix /admin.
//     Route::get('/', function () {
//         // This route will be accessible at /admin/ and will only be accessible to users who are logged in.
//         return view('admin.index');
//     });

//     Route::get('/profile', function () {
//         // This route will be accessible at /admin/profile and will only be accessible to users who are logged in.
//         return view('admin.profile');
//     });
// });
Route::prefix('admin')->group(function () {
    // All of the routes in this group will be protected by the auth middleware and will have the prefix /admin.
    Route::get('/',[AdminOpportunitiesController::class,'index']);
    Route::get('/group-owners',[AdminGroupOwnerController::class,'groupbyindex']);
    Route::get('/group-stages',[AdminGroupStage::class,'index']);
    Route::get('/stack-owners',[AdminStackedByOwner::class,'index']);
    Route::get('/stack-stages',[AdminStackedByStage::class,'index']);
    Route::get('/close-wons',[AdminAllCloseWon::class,'index']);
    Route::get('/close-dates',[AdminCloseDates::class,'index']);

});

require __DIR__.'/auth.php';
