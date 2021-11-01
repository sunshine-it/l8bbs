<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

// 自定义 3900 分钟的活跃用户统计命令类
class CalculateActiveUser extends Command
{
    /**
     * The name and signature of the console command.
     * // 供调用命令
     * @var string
     */
    protected $signature = 'l8bbs:calculate-active-user';

    /**
     * The console command description.
     * // 命令的描述
     * @var string
     */
    protected $description = '生成活跃用户';

    /**
     * Execute the console command.
     * // 最终执行的方法
     * @return int
     */
    public function handle(User $user)
    {
        // return Command::SUCCESS;
        // 在命令行打印一行信息
        $this->info("开始计算...");

        $user->calculateAndCacheActiveUsers();

        $this->info("成功生成！");
    }
}
