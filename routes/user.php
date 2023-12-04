<?php

use App\Http\Controllers\user\SurveyProductRewaradController;
use App\Http\Controllers\user\UserDashboardController;
use App\Http\Controllers\user\UserWorkController;
use Illuminate\Support\Facades\Route;


// group routing

Route::name('User.')->prefix('User')->middleware('user','auth','feesCheck')->group(function(){

        Route::get('/Dashboard',[UserDashboardController::class,'dashboard'])->name('Dashboard');
        Route::get('/My/Team',[UserDashboardController::class,'team'])->name('Team');
        Route::get('/My/Work',[UserDashboardController::class,'work'])->name('Work');
        Route::get('/Widthraw/Request',[UserDashboardController::class,'widthrawReq'])->name('Widthraw.Request');
        Route::get('/Refer/Friend',[UserWorkController::class,'referFriend'])->name('Refer.New.Friend');
        Route::get('/Widthraw/Balance',[UserWorkController::class,'widthrawBalance'])->name('Widthraw.Balance');
        Route::post('/Widthraw/Balance/Request',[UserWorkController::class,'widthrawBalanceRequest'])->name('Widthraw.Balance.Request');
        Route::post('/Widthraw/Total/Earning',[UserWorkController::class,'widthrawTotalEarning'])->name('Widthraw.Total.Earning');
        Route::post('/Deposit/Balance/Request',[UserWorkController::class,'deposit'])->name('Deposit.Request');
        // giving commission on review and surve

        Route::get('Review/Product/{id}',[SurveyProductRewaradController::class,'index'])->name('Product.Reward');

    });

