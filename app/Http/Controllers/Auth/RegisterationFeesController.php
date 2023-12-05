<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\FeesCollecator;
use App\Models\User;
use Illuminate\Http\Request;


class RegisterationFeesController extends Controller
{
    public function registerationFees()
    {
        // $easyPaisas = EasyPaisaMangement::where('status',1)->get();
        // if(Auth::user()->status == 'pending' || Auth::user()->status == 'rejected')
        // {

        //     return view('auth.registerationFees');
        // }
        // elseif(Auth::user()->status == 'waiting')
        // {
        //     return view('auth.waiting');
        // }
        // elseif(Auth::user()->status == 'approved')
        // {
        //     return redirect('/User/Dashboard');
        // }
        // else

        return view('auth.registerationFees');
    }

    public function feesDetailStore(Request $request)
    {
        $validated = $request->validate([
            // 'bank' => 'required',
            'tid' => 'required',
            'sender_num' => 'required',
            'bank_username' => 'required',
        ]);

        // checking the lenght of tid
        $lenth = $request->tid;
        $lenthCheck = strlen($lenth);
        if ($lenthCheck <= 10) {
            return redirect()->back()->with('error', 'Please enter 11 digits Trx ID');
        }

        // checking the length of num
        $num = $request->sender_num;
        $numLength = strlen($num);
        if ($numLength <= 10) {
            return redirect()->back()->with('error', 'Please enter 11 charcter num');
        }

        // checking uniqe Trx id.

        $tidChecks = FeesCollecator::get();

        foreach ($tidChecks as $tidCheck) {
            $tidCheck = $tidCheck->tid;
            if ($validated['tid'] == $tidCheck)
                return redirect()->back()->with('error', 'This tid is used before');
        }

        $user = User::where('id', auth()->user()->id)->first();

        $feesDetails = new FeesCollecator();
        $feesDetails->user_id = auth()->user()->id;
        $feesDetails->bank = 'none';
        $feesDetails->sender_num = $validated['sender_num'];
        $feesDetails->bank_username = $validated['bank_username'];
        $feesDetails->tid = $validated['tid'];
        $feesDetails->save();
        return redirect()->route('LandingPage.Wait');
    }
}
