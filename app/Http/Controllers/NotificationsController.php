<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

// 消息通知类
class NotificationsController extends Controller
{
    //
    public function __construct()
    {
        // 里调用 Auth 中间件，要求必须登录以后才能访问控制器里的所有方法
        $this->middleware('auth');
    }

    public function index()
    {
        // 获取登录用户的所有通知
        $notifications = Auth::user()->notifications()->paginate(20);
        // 标记为已读，未读数量清零
        Auth::user()->markAsRead();
        return view('notifications.index', compact('notifications'));
    }
}
