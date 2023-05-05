<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use App\Models\Role;
use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->to("/login");
        }
        if (Auth::user()->role == ROLE::ADMIN) {
            return $next($request);
        } else {
            switch (Auth::user()->role) {
                case Role::ADMIN:
                    return redirect()->to('/home');
                    break;
                case Role::KRT:
                    return redirect()->to('/kt');
                    break;
                case Role::PKK:
                    return redirect()->to('/pkk');
                    break;
                case Role::RW:
                    return redirect()->to('/rw');
                    break;
                case Role::TAKMIR:
                    return redirect()->to('/takmir');
                    break;
            }
        }
    }
}
