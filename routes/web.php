<?php

use App\Http\Controllers\Admin\AdminAllCloseWon;
use App\Http\Controllers\Admin\AdminCloseDates;
use App\Http\Controllers\Admin\AdminGroupOwnerController;
use App\Http\Controllers\Admin\AdminGroupStage;
use App\Http\Controllers\Admin\AdminOpportunitiesController;
use App\Http\Controllers\Admin\AdminStackedByOwner;
use App\Http\Controllers\Admin\AdminStackedByStage;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UserDashboardController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });



// Route::middleware('web')->group(function () {

    Route::get('/login',[AuthController::class, 'loginform'])->name('login.form');
    Route::post('/login', [AuthController::class, 'login']);


    Route::prefix('admin')->group(function () {
        // All of the routes in this group will be protected by the auth middleware and will have the prefix /admin.
        Route::get('/',[AdminOpportunitiesController::class,'index'])->name('admin.primary');
        Route::get('/', [AdminOpportunitiesController::class, 'leadsindex'])->name('admin.primary');

        Route::get('/group-owners',[AdminGroupOwnerController::class,'groupbyindex'])->name('admin.group.dashboard');
        Route::get('/group-stages',[AdminGroupStage::class,'groupstages'])->name('admin.group.stage.dashboard');
        Route::get('/stack-owners',[AdminStackedByOwner::class,'stackownerindex'])->name('admin.stack.owner.dashboard');
        Route::get('/stack-stages',[AdminStackedByStage::class,'stackstagesdashboard'])->name('admin.stack.stage.dashboard');
        Route::get('/close-wons',[AdminAllCloseWon::class,'closewondashboard'])->name('admin.close.won.dashboard');
        Route::get('/close-dates',[AdminCloseDates::class,'adminclosedatedashboard']);

    });

    Route::prefix('user')->middleware('admin')->group(function () {
        Route::get('/dashboard',[UserDashboardController::class,'userdashboard'])->name('user.dashboard');
    });


// });

require __DIR__.'/auth.php';
