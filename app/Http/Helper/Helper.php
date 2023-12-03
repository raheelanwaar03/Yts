<?php

use App\Models\User;
use App\Models\user\WidthrawBalance;

function allUser()
{
    $user = User::where('role','user')->get()->count();
    return $user;
}

function pendingUsers()
{
    $user = User::where('status', 'pending')->get()->count();
    return $user;
}

function verifiedUsers()
{
    $user = User::where('status', 'approved')->where('role','user')->get()->count();
    return $user;
}

function rejectedUsers()
{
    $user = User::where('status', 'rejected')->get()->count();
    return $user;
}

function totalReferFriends()
{
    $user = User::where('referal', auth()->user()->username)->where('status','approved')->get()->count();
    return $user;
}

// user widhrawal balance

function userWidthrawalBalance()
{
    $totalWidthraw = 0;
    $widthrawBalance = WidthrawBalance::where('user_id', auth()->user()->id)->where('status','approved')->get();
    foreach ($widthrawBalance as $widthraw) {
        $totalWidthraw += $widthraw->widthraw_amount;
    }

    return $totalWidthraw;
}


function level()
{
    $users = User::where('referal', auth()->user()->username)->get();
    $userRefer = $users->count();
    return $userRefer;
}


// function giveLevel()
// {
    
//      $users = User::where('status', 'approved')->get();
//         foreach ($users as $user) {
//             $mainUser = User::where('referal', $user->username)->where('status','approved')->get();
//             $referCount = $mainUser->count();

//             if ($mainUser != '') {
//                 if ($referCount <= 4) {
//                     $user = User::where('id', $user->id)->first();
//                     $user->level = 'Level 0';
//                     $user->save();
//                 }
//                 if ($referCount >= 5) {
//                     $user = User::where('id', $user->id)->first();
//                     $user->level = 'Level 1';
//                     $user->save();
//                 }
//                 if ($referCount >= 20) {
//                     $user = User::where('id', $user->id)->first();
//                     $user->level = 'Level 2';
//                     $user->save();
//                 }
//                 if ($referCount >= 45) {
//                     $user = User::where('id', $user->id)->first();
//                     $user->level = 'Level 3';
//                     $user->save();
//                 }
//                 if ($referCount >= 70) {
//                     $user = User::where('id', $user->id)->first();
//                     $user->level = 'Level 4';
//                     $user->save();
//                 }
//                 if ($referCount >= 100) {
//                     $user = User::where('id', $user->id)->first();
//                     $user->level = 'Level 5';
//                     $user->save();
//                 }
//                 if ($referCount >= 145) {
//                     $user = User::where('id', $user->id)->first();
//                     $user->level = 'Level 6';
//                     $user->save();
//                 }
//                 if ($referCount >= 200) {
//                     $user = User::where('id', $user->id)->first();
//                     $user->level = 'Level 7';
//                     $user->save();
//                 }
//                 if ($referCount >= 270) {
//                     $user = User::where('id', $user->id)->first();
//                     $user->level = 'Level 8';
//                     $user->save();
//                 }
//                 if ($referCount >= 350) {
//                     $user = User::where('id', $user->id)->first();
//                     $user->level = 'Level 9';
//                     $user->save();
//                 }
//                 if ($referCount >= 10000) {
//                     $user = User::where('id', $user->id)->first();
//                     $user->level = 'Level 10';
//                     $user->save();
//                 }
//             }
//         }
    
    
// }









