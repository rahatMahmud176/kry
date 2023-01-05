<?php

namespace App\Http\Middleware;

use App\Models\Admin;
use Session;
use Closure;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class superAdminMiddleware
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
        if (Session::get('adminId')) {
            if (Admin::superAdminCheck()) {
                return $next($request); 
            }else{
                Alert::info('Super Admin Only','Sorry you are not super Admin.');
                return redirect('orders');
            }
        }else{
            Alert::info('Login Or Registration','please Login or Registrer first.');
            return redirect('/login');
        }
    }
}
