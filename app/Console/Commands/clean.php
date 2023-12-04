<?php

namespace App\Console\Commands;

use App\Models\admin\EasyPaisaMangement;
use App\Models\admin\Setting;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;

class clean extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:clean';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Artisan::call('migrate:fresh');
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');

        $easyPaisa = new EasyPaisaMangement();
        $easyPaisa->easy_name = 'test';
        $easyPaisa->easy_num = '9999999999';
        $easyPaisa->status = 1;
        $easyPaisa->save();

        // Setting

        $setting = new Setting();
        $setting->refer_amount = '50';
        $setting->minimum_amount = '100';
        $setting->maximun_amount = '500';
        $setting->save();

        $user = new User();
        $user->name = 'Admin';
        $user->referal = 'default';
        $user->level = 'Level 2';
        $user->balance = '0';
        $user->phone = '03149720318';
        $user->email = 'admin123@gmail.com';
        $user->password = Hash::make('asdfasdf');
        $user->status = 'approved';
        $user->role = 'admin';
        $user->plan = '2';
        $user->save();


        $user = new User();
        $user->name = 'Demo';
        $user->email = 'testing123@gmail.com';
        $user->referal = 'default';
        $user->level = 'Level 2';
        $user->balance = '0';
        $user->phone = '03167007156';
        $user->password = Hash::make('asdfasdf');
        $user->role = 'user';
        $user->status = 'approved';
        $user->plan = '3';
        $user->save();

        return Command::SUCCESS;
    }
}
