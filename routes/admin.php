<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\dailyRewardController;
use App\Http\Controllers\admin\EasypisaController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\admin\DailyTaskController;
use App\Http\Controllers\admin\WidthrawRequestsController;
use Illuminate\Support\Facades\Route;


Route::prefix('Admin')->name('Admin.')->middleware('auth', 'admin')->group(function () {
    Route::get('/Dashboard', [AdminDashboardController::class, 'dashboard'])->name('Dashboard');
    Route::get('/Email', [AdminDashboardController::class, 'emailSetting'])->name('Email.Setting');
    Route::post('/Change/Email', [AdminDashboardController::class, 'changeEmailSetting'])->name('Change.Email.Setting');
    Route::get('/Delete/Email/{id}', [AdminDashboardController::class, 'deleteEmail'])->name('Delete.Email');
    Route::get('/Edit/User/{id}', [AdminDashboardController::class, 'editUser'])->name('Edit.User');
    Route::post('/Update/User/{id}', [AdminDashboardController::class, 'updateUser'])->name('Update.User');
    Route::get('/User/Tids', [AdminDashboardController::class, 'userTids'])->name('All.Tids');
    Route::get('/All/Users', [AdminDashboardController::class, 'allUsers'])->name('All.Users');
    Route::get('/Pending/Users', [AdminDashboardController::class, 'pendingUsers'])->name('Pending.Users');
    Route::get('/Approved/Users', [AdminDashboardController::class, 'approvedUsers'])->name('Approved.Users');
    Route::get('/Rejected/Users', [AdminDashboardController::class, 'rejectedUsers'])->name('Rejected.Users');
    Route::get('/Easypaisa/Users', [AdminDashboardController::class, 'easypaisaUsers'])->name('Easypaisa.Users');
    Route::get('/Set/Users/Level', [AdminDashboardController::class, 'setLevel'])->name('Set.User.Level');
    Route::get('/Vistors', [AdminDashboardController::class, 'vistors'])->name('Vistors');
    Route::get('/deleteIp', [AdminDashboardController::class, 'deleteIp'])->name('Delete.Ip');
    Route::get('/Delete/Unnecessary/Users', [AdminDashboardController::class, 'deleteUnnecessary'])->name('Delete.Unnecessary.Users');
    Route::get('/Delete/Pending/Users', [AdminDashboardController::class, 'deletePending'])->name('Delete.Pending.Users');
    // routes for approving user account
    Route::get('Approve/User/Account/{id}', [AdminDashboardController::class, 'approveUserAccount'])->name('Approve.User.Account.Request');
    Route::get('Reject/User/Account/{id}', [AdminDashboardController::class, 'rejectUserAccount'])->name('Rejected.User.Account.Request');
    // Giving daily reward to user according to there level
    Route::get('Daily/Reward', [dailyRewardController::class, 'dailyReward'])->name('Daily.Reward.To.Users');

    // Widthraw request Routes
    Route::get('/Widthraw/Requests', [WidthrawRequestsController::class, 'allRequests'])->name('All.Widthraw.Requests');
    Route::get('/Rejected/Widthraw/Requests', [WidthrawRequestsController::class, 'rejectedWidthrawal'])->name('Rejected.Widthraw');
    Route::get('/Approved/Widthraw/Requests', [WidthrawRequestsController::class, 'approvedWidthrawal'])->name('Approved.Widthraw');
    Route::get('/Approve/Widthraw/{id}', [WidthrawRequestsController::class, 'approveWidthraw'])->name('Approve.Widthraw');
    Route::get('/Reject/Widthraw/{id}', [WidthrawRequestsController::class, 'rejectWidthraw'])->name('Reject.Widthraw');

    // Admin esaypaisa details Routes

    Route::resource('Easypaisa', EasypisaController::class);
    // Level Routes set/users
    Route::get('set/users',[SettingController::class,'userSet'])->name('Set.User');
    Route::post('Store/set/users',[SettingController::class,'storeUserSetting'])->name('Store.User.Setting');
    Route::get('Delete/User/Setting/{id}',[SettingController::class,'delUserSetting'])->name('Delete.User.Setting');
    Route::get('Level/Setting',[SettingController::class,'allLevels'])->name('All.Levels');
    Route::get('Edit/Level/Setting/{id}',[SettingController::class,'editLevel'])->name('Edit.Level');
    Route::post('Update/Level/Setting/{id}',[SettingController::class,'updateLevel'])->name('Update.Level');

    // setting route
    Route::resource('Setting', SettingController::class);
    // add product routes
    Route::resource('Product', ProductController::class);
    Route::get('/daily-task', [DailyTaskController::class, 'index']);
    Route::get('/daily-reward', [DailyTaskController::class, 'reward']);
    Route::post('/store-reward', [DailyTaskController::class, 'storeReward']);
    Route::post('/daily-task-store', [DailyTaskController::class, 'store']);
    Route::post('/daily-task-update/{id}', [DailyTaskController::class, 'update']);
    Route::get('/daily-task-delete/{id}', [DailyTaskController::class, 'destroy']);
});
