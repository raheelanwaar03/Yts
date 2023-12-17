<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\EamilSetting;
use App\Models\admin\Setting;
use App\Models\FeesCollecator;
use App\Models\User;
use App\Models\user\ReferalLevel;
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

    public function todayUser()
    {
        $users = User::with('trxIds')->where('created_at', Carbon::today())->get();
        return view('admin.dashboard.todayUser', compact('users'));
    }

    // Email setting

    public function emailSetting()
    {
        $email_setting = EamilSetting::get();
        return view('admin.email', compact('email_setting'));
    }

    public function changeEmailSetting(Request $request)
    {
        $eamil_setting = new EamilSetting();
        $eamil_setting->email = $request->email;
        $eamil_setting->status = $request->status;
        $eamil_setting->save();
        return redirect()->back()->with('success', 'Email Changed');
    }

    public function deleteEmail($id)
    {
        $email = EamilSetting::find($id);
        $email->delete();
        return redirect()->back()->with('success', 'Email Deleted');
    }


    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);
        $user->level = $request->level;
        $user->plan = $request->plan;
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
        $pending_users = FeesCollecator::where('status', 'pending')->with('userFees')->get();
        return view('admin.dashboard.pendingUser', compact('pending_users'));
    }

    public function approvedUsers()
    {
        $users = FeesCollecator::where('status', 'approved')->with('userFees')->get();
        return view('admin.dashboard.approvedUsers', compact('users'));
    }

    public function rejectedUsers()
    {
        $users = FeesCollecator::where('status', 'rejected')->with('userFees')->get();
        return view('admin.dashboard.rejectedUser', compact('users'));
    }

    public function easypaisaUsers()
    {
        $users = User::with('trxIds')->get();
        return view('admin.dashboard.easypaisUser', compact('users'));
    }

    public function approveUserAccount($id)
    {
        $levelCheck = ReferalLevel::where('status', 1)->first();
        $level1 = $levelCheck->level1;
        $level2 = $levelCheck->level2;
        $level3 = $levelCheck->level3;
        $level4 = $levelCheck->level4;
        $level5 = $levelCheck->level5;
        $level6 = $levelCheck->level6;
        $level7 = $levelCheck->level7;
        $level8 = $levelCheck->level8;
        $level9 = $levelCheck->level9;
        $level10 = $levelCheck->level10;

        // getting widthraw commission of admin
        $setting = Setting::where('status', 1)->first();
        // getting sliver Commission
        $silver = $setting->silver;
        $silverSecondCommission = $silver * 3 / 100;
        $silverThirdCommission = $silver * 1 / 100;
        // getting gold commission
        $gold = $setting->gold;
        $goldSecondCommission = $gold * 3 / 100;
        $goldThirdCommission = $gold * 1 / 100;
        // Getting dimond Commissions
        $dimond = $setting->dimond;
        $dimondSecondCommission = $dimond * 3 / 100;
        $dimondThirdCommission = $dimond * 1 / 100;

        $pending_user = FeesCollecator::find($id);
        $pending_user->status = 'approved';
        $pending_user->save();
        $tid = $pending_user->user_id;

        $user = User::find($tid);
        $user->status = 'approved';
        $user->save();

        // checking user selected plan
        $userPlan = $user->plan;
        if ($userPlan == 1) {
            $firstUpliner = User::where('email', $user->referal)->where('status', 'approved')->first();
            if ($firstUpliner == '') {
                return redirect()->back()->with('massage', 'Account has beed Approved successfully');
            } else {
                $firstUpliner->balance += $silver;
                // giving upliner his level
                $allUsers = User::where('referal', $firstUpliner->email)->where('status', 'approved')->get();
                $referCount = $allUsers->count();

                if ($allUsers != '') {
                    if ($referCount <= 4) {
                        $firstUpliner->level = 'Level 1';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level1) {
                        $firstUpliner->level = 'Level 2';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level2) {
                        $firstUpliner->level = 'Level 3';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level3) {
                        $firstUpliner->level = 'Level 4';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level4) {
                        $firstUpliner->level = 'Level 5';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level5) {
                        $firstUpliner->level = 'Level 6';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level6) {
                        $firstUpliner->level = 'Level 7';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level7) {
                        $firstUpliner->level = 'Level 8';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level8) {
                        $firstUpliner->level = 'Level 9';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level9) {
                        $firstUpliner->level = 'Level 10';
                        $firstUpliner->save();
                    }
                }

                //  Second Upliner
                $indirectCommission1 = $silverSecondCommission;
                // getting user
                $secondUpliner = User::where('email', $firstUpliner->referal)->where('status', 'approved')->first();
                if ($secondUpliner == '') {
                    return redirect()->back()->with('massage', 'Account has beed Approved successfully');
                } else {
                    $secondUpliner->balance += $indirectCommission1;
                    $secondUpliner->save();
                }
                // Third UPliner
                $indirectCommission2 = $silverThirdCommission;
                // getting third person;
                $thirdUpliner = User::where('email', $secondUpliner->referal)->where('status', 'approved')->first();
                if ($thirdUpliner == '') {
                    return redirect()->back()->with('massage', 'Account has beed Approved successfully');
                } else {
                    $thirdUpliner->balance += $indirectCommission2;
                    $thirdUpliner->save();
                };
            }
        }

        if ($userPlan == 2) {
            $firstUpliner = User::where('email', $user->referal)->where('status', 'approved')->first();
            if ($firstUpliner == '') {
                return redirect()->back()->with('massage', 'Account has beed Approved successfully');
            } else {
                $firstUpliner->balance += $gold;
                // giving upliner his level
                $mainUser = User::where('referal', $firstUpliner->email)->where('status', 'approved')->get();
                $referCount = $mainUser->count();

                if ($mainUser != '') {
                    if ($referCount <= 4) {
                        $firstUpliner->level = 'Level 1';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level1) {
                        $firstUpliner->level = 'Level 2';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level2) {
                        $firstUpliner->level = 'Level 3';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level3) {
                        $firstUpliner->level = 'Level 4';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level4) {
                        $firstUpliner->level = 'Level 5';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level5) {
                        $firstUpliner->level = 'Level 6';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level6) {
                        $firstUpliner->level = 'Level 7';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level7) {
                        $firstUpliner->level = 'Level 8';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level8) {
                        $firstUpliner->level = 'Level 9';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level9) {
                        $firstUpliner->level = 'Level 10';
                        $firstUpliner->save();
                    }
                }

                //  Second Upliner
                $indirectCommission1 = $goldSecondCommission;
                // getting user
                $secondUpliner = User::where('email', $firstUpliner->referal)->where('status', 'approved')->first();
                if ($secondUpliner == '') {
                    return redirect()->back()->with('massage', 'Account has beed Approved successfully');
                } else {
                    $secondUpliner->balance += $indirectCommission1;
                    $secondUpliner->save();
                }
                // Third UPliner
                $indirectCommission2 = $goldThirdCommission;
                // getting third person;
                $thirdUpliner = User::where('email', $secondUpliner->referal)->where('status', 'approved')->first();
                if ($thirdUpliner == '') {
                    return redirect()->back()->with('massage', 'Account has beed Approved successfully');
                } else {
                    $thirdUpliner->balance += $indirectCommission2;
                    $thirdUpliner->save();
                };
            }
        }

        if ($userPlan == 3) {
            $firstUpliner = User::where('email', $user->referal)->where('status', 'approved')->first();
            if ($firstUpliner == '') {
                return redirect()->back()->with('massage', 'Account has beed Approved successfully');
            } else {
                $firstUpliner->balance += $dimond;
                // giving upliner his level
                $mainUser = User::where('referal', $firstUpliner->email)->where('status', 'approved')->get();
                $referCount = $mainUser->count();

                if ($mainUser != '') {
                    if ($referCount <= 4) {
                        $firstUpliner->level = 'Level 1';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level1) {
                        $firstUpliner->level = 'Level 2';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level2) {
                        $firstUpliner->level = 'Level 3';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level3) {
                        $firstUpliner->level = 'Level 4';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level4) {
                        $firstUpliner->level = 'Level 5';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level5) {
                        $firstUpliner->level = 'Level 6';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level6) {
                        $firstUpliner->level = 'Level 7';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level7) {
                        $firstUpliner->level = 'Level 8';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level8) {
                        $firstUpliner->level = 'Level 9';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level9) {
                        $firstUpliner->level = 'Level 10';
                        $firstUpliner->save();
                    }
                }

                //  Second Upliner
                $indirectCommission1 = $dimondSecondCommission;
                // getting user
                $secondUpliner = User::where('email', $firstUpliner->referal)->where('status', 'approved')->first();
                if ($secondUpliner == '') {
                    return redirect()->back()->with('massage', 'Account has beed Approved successfully');
                } else {
                    $secondUpliner->balance += $indirectCommission1;
                    $secondUpliner->save();
                }
                // Third UPliner
                $indirectCommission2 = $dimondThirdCommission;
                // getting third person;
                $thirdUpliner = User::where('email', $secondUpliner->referal)->where('status', 'approved')->first();
                if ($thirdUpliner == '') {
                    return redirect()->back()->with('massage', 'Account has beed Approved successfully');
                } else {
                    $thirdUpliner->balance += $indirectCommission2;
                    $thirdUpliner->save();
                };
            }
        }

        return redirect()->back()->with('massage', 'User Approved Successfully');
    }

    public function rejectUserAccount($id)
    {
        $tid = FeesCollecator::find($id);
        $tid->status = 'rejected';
        $tid->save();
        $user_id = $tid->user_id;
        // rejecting user
        $user = User::find($user_id);
        $user->status = 'rejected';
        $user->save();
        return redirect()->back()->with('success', 'Account has been Rejected successfully');
    }

    public function vistors()
    {
        $vistors = Vistor::whereDate('created_at', now()->today())->get();
        return view('admin.dashboard.vistors', compact('vistors'));
    }


    public function deleteUnnecessary()
    {
        $users = User::where('role', 'user')->where('status', 'rejected')->get();
        foreach ($users as $user) {
            $user = User::where('id', $user->id)->first();
            $user->delete();
        }

        return redirect()->back()->with('success', 'Rejected Users Deleted Successfully!');
    }

    public function deletePending()
    {
        $users = User::where('role', 'user')->where('status', 'pending')->get();
        foreach ($users as $user) {
            $user = User::where('id', $user->id)->first();
            $user->delete();
        }

        return redirect()->back()->with('success', 'Rejected Users Deleted Successfully!');
    }


    public function deleteIp()
    {
        $vistors = Vistor::get();
        foreach ($vistors as $vistor) {
            $vistor = Vistor::where('id', $vistor->id)->first();
            $vistor->delete();
        }

        return redirect()->back()->with('success', 'Cache cleared Successfully!');
    }
}
