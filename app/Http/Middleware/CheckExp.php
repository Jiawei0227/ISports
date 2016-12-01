<?php

namespace App\Http\Middleware;

use App\Competition;
use App\User;
use Closure;
use Auth;
class CheckExp
{
    /**
     * 返回请求过滤器
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $competition = Competition::whereId($request->route('id'))->first();
        if ($competition->limit_exp > Auth::user()->experience){
            return redirect('competition/notAllowed');
        }

        return $next($request);
    }

}