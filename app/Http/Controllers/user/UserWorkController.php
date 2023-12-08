<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\Setting;
use App\Models\User;
use App\Models\user\WidthrawBalance;
use App\Models\user\WidthrawEarning;
use Illuminate\Http\Request;



class UserWorkController extends Controller
{
    public function referFriend()
    {
        return view('user.work.refer');
    }

    public function widthrawBalance()
    {
        return view('user.account.widthraw');
    }

    public function widthrawBalanceRequest(Request $request)
    {
        $validated = $request->validate([
            'widthraw_bank' => 'required',
            'widthraw_amount' => 'required',
            'widthraw_name' => 'required',
            'widthraw_num' => 'required',
        ]);
        $userWidthrawAmount = $validated['widthraw_amount'];
        // See user balance

        if ($userWidthrawAmount > auth()->user()->balance) {
            return redirect()->back()->with('error', 'You have not enough balance');
        }

        if (auth()->user()->level = 'level 1') {
            if ($validated['widthraw_amount'] <= 100) {
                return redirect()->back()->with('error', 'You can only widthraw 100 Rs.');
            }
        }

        if (auth()->user()->level != 'level 1') {
            if ($validated['widthraw_amount'] <= 400) {
                return redirect()->back()->with('error', 'You can only widthraw 400 Rs.');
            }
        }

        // Checking Admin Limite

        $adminWidthraw = Setting::where('status', 1)->first();
        $adminWidthrawMini = $adminWidthraw->minimum_amount;
        $adminWidthrawMax = $adminWidthraw->maximun_amount;

        if ($adminWidthrawMini > $userWidthrawAmount) {
            return redirect()->back()->with('error', 'Your Widthraw request is less than Admin Limite');
        }

        if ($userWidthrawAmount > $adminWidthrawMax) {
            return redirect()->back()->with('error', 'Your Widthraw request is Greater than Admin Limite');
        }

        // checking user if he already request for widthraw

        $widthrawRequest = WidthrawBalance::where('status', 'pending')->where('user_id', auth()->user()->id)->first();
        if ($widthrawRequest) {
            return redirect()->back()->with('error', 'You already requested for widthraw please wait for approval');
        }

        $widthraw = new WidthrawBalance();
        $widthraw->user_id = auth()->user()->id;
        $widthraw->widthraw_bank = $validated['widthraw_bank'];
        $widthraw->widthraw_amount = $validated['widthraw_amount'];
        $widthraw->widthraw_name = $validated['widthraw_name'];
        $widthraw->widthraw_num = $validated['widthraw_num'];
        $widthraw->save();
        return redirect()->back()->with('success', 'You have successfully requested for widthraw you will notify when admin approved');
    }

    public function widthrawTotalEarning(Request $request)
    {
        // $user_level = auth()->user()->level;
        // if ($user_level != 'level 10') {
        //     return redirect()->back()->with('error', 'You cannot widthraw untill your level becomes 10');
        // }

        // $validated = $request->validate([
        //     'widthraw_bank' => 'required',
        //     'widthraw_amount' => 'required',
        //     'widthraw_name' => 'required',
        //     'widthraw_num' => 'required',
        // ]);


        // $userWidthrawAmount = $validated['widthraw_amount'];
        // if ($user_level = 'level 1') {
        //     if ($userWidthrawAmount >= 99) {
        //         return redirect()->back()->with('error', 'You can only widthraw 100 rupees on level 1');
        //     }
        // } elseif ($user_level != 'level 1') {
        //     if ($userWidthrawAmount >= 299) {
        //         return redirect()->back()->with('error', 'You can only widthraw 300 rupees.');
        //     }
        // }

        // if ($userWidthrawAmount > auth()->user()->balance) {
        //     return redirect()->back()->with('error', 'You have not enough balance');
        // }

        // $widthraw = new WidthrawEarning();
        // $widthraw->user_id = auth()->user()->id;
        // $widthraw->widthraw_bank = $validated['widthraw_bank'];
        // $widthraw->widthraw_amount = $validated['widthraw_amount'];
        // $widthraw->widthraw_name = $validated['widthraw_name'];
        // $widthraw->widthraw_num = $validated['widthraw_num'];
        // $widthraw->save();
    }
}
