<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Setting;
use App\Models\User;
use App\Models\Vistor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;


class AdminDashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    // user edit option for admin

    public function editUser($id)
    {
        $user = User::where('id', $id)->first();
        return view('admin.dashboard.editUser', compact('user'));
    }

    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->level = $request->level;
        $user->email = $request->email;
        $user->balance = $request->balance;
        $user->save();
        return redirect()->back()->with('success', 'User Details updated successfully');
    }

    // rest work

    public function userTids()
    {
        $users = User::where('status', 'pending')->with('trxIds')->get();
        return view('admin.dashboard.userTids', compact('users'));
    }

    public function allUsers()
    {
        $users = User::with('trxIds')->get();
        return view('admin.dashboard.allUsers', compact('users'));
    }

    public function pendingUsers()
    {
        $users = User::where('status', 'pending')->with('trxIds')->get();
        return view('admin.dashboard.pendingUser', compact('users'));
    }

    public function approvedUsers()
    {
        $users = User::where('status', 'approved')->with('trxIds')->get();
        return view('admin.dashboard.approvedUsers', compact('users'));
    }

    public function rejectedUsers()
    {
        $users = User::where('status', 'rejected')->with('trxIds')->get();
        return view('admin.dashboard.rejectedUser', compact('users'));
    }

    public function easypaisaUsers()
    {
        $users = User::with('trxIds')->get();
        return view('admin.dashboard.easypaisUser', compact('users'));
    }

    public function approveUserAccount($id)
    {
        // getting widthraw commission of admin
        $setting = Setting::where('status',1)->first();
        $firstCommission = $setting->refer_amount;

        $user = User::find($id);
        $user->status = 'approved';
        $user->save();
        //  getting second user
        $firstUpliner = User::where('email', $user->referal)->where('status','approved')->first();
        if ($firstUpliner == null) {
            return redirect()->back()->with('success', 'Account has beed Approved successfully');
        } else {
            $firstUpliner->balance += $firstCommission;
           $firstUpliner->save();

        }
        //  Second Upliner
        $indirectCommission1 = 20;
        // getting user
        $secondUpliner = User::where('email', $firstUpliner->referal)->where('status','approved')->first();

        if ($secondUpliner == '') {
            return redirect()->back()->with('success', 'Account has beed Approved successfully');
        } else {
            $secondUpliner->balance += $indirectCommission1;
            $secondUpliner->save();
        }
        // Third UPliner
        $indirectCommission2 = 5;
        // getting third person;
        $thirdUpliner = User::where('email', $secondUpliner->referal)->where('status','approved')->first();
        if ($thirdUpliner == '') {
            return redirect()->back()->with('success', 'Account has beed Approved successfully');
        } else {
            $thirdUpliner->balance += $indirectCommission2;
            $thirdUpliner->save();
        }


        return redirect()->back()->with('success', 'User Approved Successfully');
    }

    public function rejectUserAccount($id)
    {
        $user = User::find($id);
        $user->status = 'rejected';
        $user->save();
        return redirect()->back()->with('success', 'Account has been Rejected successfully');
    }

    // set user level

    // public function setLevel()
    // {
    //     $users = User::where('status', 'approved')->get();
    //     foreach ($users as $user) {
    //         $mainUser = User::where('referal', $user->email)->where('status','approved')->get();
    //         $referCount = $mainUser->count();

    //         if (!$mainUser = '') {
    //             if ($referCount <= 4) {
    //                 $user = User::where('id', $user->id)->first();
    //                 $user->level = 'Level 0';
    //                 $user->save();
    //             }
    //             if ($referCount >= 5) {
    //                 $user = User::where('id', $user->id)->first();
    //                 $user->level = 'Level 1';
    //                 $user->save();
    //             }
    //             if ($referCount >= 20) {
    //                 $user = User::where('id', $user->id)->first();
    //                 $user->level = 'Level 2';
    //                 $user->save();
    //             }
    //             if ($referCount >= 45) {
    //                 $user = User::where('id', $user->id)->first();
    //                 $user->level = 'Level 3';
    //                 $user->save();
    //             }
    //             if ($referCount >= 70) {
    //                 $user = User::where('id', $user->id)->first();
    //                 $user->level = 'Level 4';
    //                 $user->save();
    //             }
    //             if ($referCount >= 100) {
    //                 $user = User::where('id', $user->id)->first();
    //                 $user->level = 'Level 5';
    //                 $user->save();
    //             }
    //             if ($referCount >= 145) {
    //                 $user = User::where('id', $user->id)->first();
    //                 $user->level = 'Level 6';
    //                 $user->save();
    //             }
    //             if ($referCount >= 200) {
    //                 $user = User::where('id', $user->id)->first();
    //                 $user->level = 'Level 7';
    //                 $user->save();
    //             }
    //             if ($referCount >= 270) {
    //                 $user = User::where('id', $user->id)->first();
    //                 $user->level = 'Level 8';
    //                 $user->save();
    //             }
    //             if ($referCount >= 350) {
    //                 $user = User::where('id', $user->id)->first();
    //                 $user->level = 'Level 9';
    //                 $user->save();
    //             }
    //             if ($referCount >= 10000) {
    //                 $user = User::where('id', $user->id)->first();
    //                 $user->level = 'Level 10';
    //                 $user->save();
    //             }
    //         }
    //     }
    //     return redirect()->back()->with('success', 'Level Given to all users according to their referals');
    // }

    public function vistors()
    {
        $vistors = Vistor::whereDate('created_at',now()->today())->get();
        return view('admin.dashboard.vistors',compact('vistors'));
    }


    public function deleteUnnecessary()
    {
        $users = User::where('role','user')->where('status','rejected')->get();
        foreach( $users as $user )
        {
            $user = User::where('id',$user->id)->first();
            $user->delete();
        }

        return redirect()->back()->with('success','Rejected Users Deleted Successfully!');

    }

    public function deletePending()
    {
        $users = User::where('role','user')->where('status','pending')->get();
        foreach( $users as $user )
        {
            $user = User::where('id',$user->id)->first();
            $user->delete();
        }

        return redirect()->back()->with('success','Rejected Users Deleted Successfully!');

    }


    public function deleteIp()
    {
        $vistors = Vistor::get();
        foreach( $vistors as $vistor )
        {
            $vistor = Vistor::where('id',$vistor->id)->first();
            $vistor->delete();
        }

        return redirect()->back()->with('success','Cache cleared Successfully!');

    }


}
