<?php

namespace App\Modules\Admin\Middlewares;

use Closure;
use Auth;

class CheckCanLoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function __construct(){
       $this->auth = Auth::guard('web');
     }
    public function handle($request, Closure $next)
    {
        if(!$this->auth->check()) return redirect('/admin/login')->withErrors('You have to login firsrt.');
        if(!$this->auth->user()->can('login')){
            $this->auth->logout();
            return redirect('/admin/login')->withErrors('You must login first.');
        }
        return $next($request);
    }
}
