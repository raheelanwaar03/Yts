<?php

use App\Models\User;
use App\Models\user\WidthrawBalance;
use App\Models\Vistor;

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
    $user = User::where('referal', auth()->user()->email)->where('status','approved')->get()->count();
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
    $users = User::where('referal', auth()->user()->email)->get();
    $userRefer = $users->count();
    return $userRefer;
}

function today_earning()
{
    $earning = Vistor::where('user_id',auth()->user()->id)->get();
    $total_earning = 0;
    foreach($earning as $earn)
    {
        $total_earning += $earn->amount;
    }
    return $total_earning;
}
