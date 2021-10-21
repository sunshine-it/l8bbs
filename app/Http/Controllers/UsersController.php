<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    // 个人中心
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    // 编辑资料
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    // 资料跟新
    public function update(UserRequest $request, User $user)
    {
        // dd($request->all());
        $user->update($request->all());
        return redirect()->route('users.show', $user->id)->with('success', '人资料更新成功！');
    }
}
