<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use app\Models\User;
use Illuminate\Support\Facades\Auth;

class Admin
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
        if (Auth::user()->usertype == "admin") {
            return $next($request);
        }

        // Mendapatkan URL referer (halaman sebelumnya)
        $previousUrl = url()->previous();

        // Redirect pengguna ke URL referer
        return redirect($previousUrl)->with('error', 'Anda tidak diizinkan');
    }


}
