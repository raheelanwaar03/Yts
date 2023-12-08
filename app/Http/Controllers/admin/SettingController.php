<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Setting;
use App\Models\user\ReferalLevel;
use App\Models\user\UserSetting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Setting::where('status', 1)->get();
        return view('admin.dashboard.setting', compact('settings'));
    }

    public function userSet()
    {
        $user_setting = UserSetting::get();
        return view('admin.setting.setUser',compact('user_setting'));
    }

    public function storeUserSetting(Request $request)
    {
        $user_setting = new UserSetting();
        $user_setting->name = $request->name;
        $user_setting->level = $request->level;
        $user_setting->plan = $request->plan;
        $user_setting->earning = $request->earning;
        $user_setting->save();
        return redirect()->back()->with('success', 'Student details added successfully');
    }

    public function delUserSetting($id)
    {
        $user = UserSetting::find($id);
        $user->delete();
        return redirect()->back()->with('success', 'User deleted successfully');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'minimum_amount' => 'required',
            'maximun_amount' => 'required'
        ]);

        $setting = new Setting();
        $setting->minimum_amount = $validated['minimum_amount'];
        $setting->maximun_amount = $validated['maximun_amount'];
        $setting->save();
        return redirect()->back()->with('succss', 'New Setting Appllied');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $setting = Setting::find($id);
        return view('admin.dashboard.editSetting', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $setting = Setting::find($id);
        $setting->silver = $request->silver;
        $setting->gold = $request->gold;
        $setting->dimond = $request->dimond;
        $setting->minimum_amount = $request->minimum_amount;
        $setting->maximun_amount = $request->maximun_amount;
        $setting->save();
        return redirect()->back()->with('success', 'Setting updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function allLevels()
    {
        $levels = ReferalLevel::where('status', 1)->get();
        return view('admin.setting.level', compact('levels'));
    }

    public function editLevel($id)
    {
        $level = ReferalLevel::find($id);
        return view('admin.setting.editlevel', compact('level'));
    }

    public function updateLevel(Request $request, $id)
    {
        $level = ReferalLevel::find($id);
        $level->level1 = $request->level1;
        $level->level2 = $request->level2;
        $level->level3 = $request->level3;
        $level->level4 = $request->level4;
        $level->level5 = $request->level5;
        $level->level6 = $request->level6;
        $level->level7 = $request->level7;
        $level->level8 = $request->level8;
        $level->level9 = $request->level9;
        $level->level10 = $request->level10;
        $level->save();
        return redirect()->back()->with('success', 'Level Changed successfully');
    }
}
