<?php

namespace App\Http\Controllers;

use App\Models\admin\AdminProductModel;
use App\Models\ShareProduct;
use App\Models\Vistor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class landingPageController extends Controller
{
    public function home()
    {

        if (auth()->check()) {
            // The user is authenticated, you can perform additional actions if needed
            return redirect('/User/Dashboard');
        } else {
            // The user is not authenticated
            return view('LandingPage.welcome');
        }
    }

    public function contact()
    {
        return view('LandingPage.contact');
    }

    public function about()
    {
        return view('LandingPage.aboutUs');
    }

    public function affilate()
    {
        return view('LandingPage.affliatePage');
    }

    public function productPage($referal = 'default')
    {
        // return $referal;

        if ($referal != 'default') {
            if (!auth()->user()) {
                return redirect()->route('register', $referal)->with('error', 'Please make your account to see Products');
            }
        } else {
            $productShare = new ShareProduct();
            $productShare->shareby = $referal;
            $productShare->username = auth()->user()->username;
            $productShare->save();
        }
        
        
          $currentDate = Carbon::now();
         $fifteenDaysAgo = $currentDate->subDays(15);
         // checking user last 15 days referals
         
         $user = User::find(auth()->user()->id); 

           if (!$user->isAccount15DaysOld()) {
               
                  $products = AdminProductModel::where('product_level',auth()->user()->level)->paginate(9);
                  return view('user.work.index',compact('products'));
               
            }
            
             $userReferal = User::where('referal',auth()->user()->username)->whereDate('created_at', '>' , $fifteenDaysAgo)->where('status','approved')->get();
              if($userReferal->isEmpty())
                 {
                   return redirect()->back()->with('error','You have not add any user from last 15 days. Please add new user to continue');
                 }
                 else{
                     $products = AdminProductModel::where('product_level',auth()->user()->level)->paginate(9);
                  return view('user.work.index',compact('products'));
                 }
    }
}








