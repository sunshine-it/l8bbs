<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

// 用户策略类
class UserPolicy
{
    use HandlesAuthorization;

    // 更新操作
    public function update(User $currentUser, User $user)
    {
        return $currentUser->id === $user->id;
    }
}
