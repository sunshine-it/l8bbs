<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

// 前置中间件 记录用户登陆时间
class RecordLastActivedTime
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
        // 记录
        // 同步
        // 读取
        // 如果是登录用户的话
        if (Auth::check())
        {
            // 记录最后登录时间
            Auth::user()->recordLastActivedAt();

        }
        return $next($request);
    }
}
