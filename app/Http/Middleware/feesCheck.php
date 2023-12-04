<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class feesCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->status == 'approved'){
            return $next($request);
        }
        if(auth()->user()->status == 'rejected')
        {
            return redirect()->route('Registeration.Fees')->with('error','Your accound has been rejected Please pay your registeration fees and enter correct Tid & if you pay us before then enter correct tid username and number again');
        }
        else
        {
            return redirect()->back()->with('error','Please wait for your Account Approval Or Pay your Registeration Fees');
        }
    }
}
