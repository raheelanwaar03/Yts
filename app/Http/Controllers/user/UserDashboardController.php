<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\AdminProductModel;
use App\Models\admin\EamilSetting;
use App\Models\User;
use App\Models\user\WidthrawBalance;
use Carbon\Carbon;
use App\Models\DailyTask;
use App\Models\user\UserSetting;

class UserDashboardController extends Controller
{
    public function dashboard()
    {
        $team = User::where('referal', auth()->user()->email)->where('status', 'approved')->orderBy('id', 'desc')->get();
        $team_count = User::where('referal', auth()->user()->id)->orderBy('id', 'desc')->count();
        $widthrawH_history = WidthrawBalance::where('user_id', auth()->user()->id)->get();
        $user_setting = UserSetting::get();
        $withdraw_total = WidthrawBalance::where('status', 'approved')->where('user_id', auth()->user()->id)->sum('widthraw_amount');
        $daily_reward = DailyTask::where('level', auth()->user()->level)->where('type', 'reward')->where('plan', auth()->user()->plan)->get();
        $email_setting = EamilSetting::where('status', 1)->first();
        $daily_task = DailyTask::where('level', auth()->user()->level)->where('type', 'task')->where('plan', auth()->user()->plan)->get();
        $data = compact('team', 'team_count', 'user_setting' , 'email_setting', 'widthrawH_history', 'withdraw_total', 'daily_task', 'daily_reward');
        return view('user.dashboard')->with($data);
    }

    public function team()
    {
        $users = User::where('referal', auth()->user()->email)->where('status', 'approved')->get();
        return view('user.work.team', compact('users'));
    }

    public function widthrawReq()
    {
        $widthraws = WidthrawBalance::where('user_id', auth()->user()->id)->get();
        return view('user.work.widthrawReq', compact('widthraws'));
    }

}
