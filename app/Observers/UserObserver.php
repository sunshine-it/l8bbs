<?php

namespace App\Observers;

use App\Models\User;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

// 用户模型监控器
class UserObserver
{
    public function saving(User $user)
    {
        // 只有空的时候才指定默认头像
        if (empty($user->avatar))
        {
            $user->avatar = 'https://cdn.learnku.com/uploads/images/201710/30/1/TrJS40Ey5k.png';
        }
    }

    public function creating(User $user)
    {
        //
    }

    public function updating(User $user)
    {
        //
    }
}
