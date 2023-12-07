<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\AdminProductModel;
use App\Models\DailyTask;
use App\Models\User;
use App\Models\Vistor;
use Carbon\Carbon;

class SurveyProductRewaradController extends Controller
{
    public function index($id)
    {
        $product = DailyTask::find($id);
        $productRewarad = $product->price;
        $product_type = $product->type;

        $visitor = Vistor::where('user_id', auth()->user()->id)->where('product_id',$id)->whereDate('created_at', '=', Carbon::today())->first();
        if (!$visitor) {
            if ($product_type == 'reward') {
                // storing product
                $visitor = new Vistor();
                $visitor->user_id = auth()->user()->id;
                $visitor->product_id = $id;
                $visitor->amount += $productRewarad;
                $visitor->ip = request()->ip();
                $visitor->dateTime = date(now());
                $visitor->save();
                return redirect()->back()->with('success', 'Reward recived');
            }
        }

        if (!$visitor) {
            if ($product_type == 'task') {
                // storing product
                $visitor = new Vistor();
                $visitor->user_id = auth()->user()->id;
                $visitor->product_id = $id;
                $visitor->amount += $productRewarad;
                $visitor->ip = request()->ip();
                $visitor->dateTime = date(now());
                $visitor->save();
                // // giving user product reward
                $user = User::where('id', auth()->user()->id)->first();
                $user->balance += $productRewarad;
                $user->save();
                return back()->with('success', 'Reward recived');
            }
        }

        return redirect()->back()->with('error', 'You have been rewarded before for this link');
    }
}
