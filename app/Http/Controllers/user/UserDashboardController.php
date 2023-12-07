<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\AdminProductModel;
use App\Models\admin\EamilSetting;
use App\Models\User;
use App\Models\user\WidthrawBalance;
use Carbon\Carbon;
use App\Models\DailyTask;

class UserDashboardController extends Controller
{
    public function dashboard()
    {
        $team = User::where('referal', auth()->user()->email)->where('status', 'approved')->orderBy('id', 'desc')->get();
        $team_count = User::where('referal', auth()->user()->id)->orderBy('id', 'desc')->count();
        $widthrawH_history = WidthrawBalance::where('status', 'approved')->where('user_id', auth()->user()->id)->get();
        $withdraw_total = WidthrawBalance::where('status', 'approved')->where('user_id', auth()->user()->id)->sum('widthraw_amount');
        $daily_reward = DailyTask::where('level', auth()->user()->level)->where('type', 'reward')->where('plan', auth()->user()->plan)->get();
        $email_setting = EamilSetting::where('status', 1)->first();
        $daily_task = DailyTask::where('level', auth()->user()->level)->where('type', 'task')->where('plan', auth()->user()->plan)->get();
        $data = compact('team', 'team_count', 'email_setting', 'widthrawH_history', 'withdraw_total', 'daily_task', 'daily_reward');
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

    public function work()
    {

        $currentDate = Carbon::now();
        $fifteenDaysAgo = $currentDate->subDays(15);
        // checking user last 15 days referals

        $user = User::find(auth()->user()->id);

        if (!$user->isAccount15DaysOld()) {

            $products = AdminProductModel::where('product_level', auth()->user()->level)->paginate(9);
            return view('user.work.index', compact('products'));
        }

        $userReferal = User::where('referal', auth()->user()->username)->whereDate('created_at', '>', $fifteenDaysAgo)->where('status', 'approved')->get();
        if ($userReferal->isEmpty()) {
            return redirect()->back()->with('error', 'You have not add any user from last 15 days. Please add new user to continue');
        } else {
            $products = AdminProductModel::where('product_level', auth()->user()->level)->paginate(9);
            return view('user.work.index', compact('products'));
        }
    }
}
