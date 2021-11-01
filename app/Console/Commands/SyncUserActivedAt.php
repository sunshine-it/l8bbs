<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

// 将最后登陆用户时间写入到数据表的命令类
class SyncUserActivedAt extends Command
{
    protected $signature = 'l8bbs:sync-user-actived-at';
    protected $description = '将用户最后登录时间从 Redis 同步到数据库中';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(User $user)
    {
        // return Command::SUCCESS;
        $this->info("执行同步...");
        $user->syncUserActivedAt();
        $this->info("同步成功！");
    }
}
