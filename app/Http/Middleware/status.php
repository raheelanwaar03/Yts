<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class status
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
        if (auth()->user()->status == 'pending') {
            return $next($request);
        } elseif (auth()->user()->status == 'approved') {
            return redirect()->route('User.Dashboard')->with('success', 'Welcome to User Dashboard');
        } elseif (auth()->user()->status == 'rejected') {
            return redirect()->route('Registeration.Fees')->with('error', 'Your account has been rejected.Enter accurate details');
        }
    }
}
