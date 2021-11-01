<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cache;

// 资源推荐模型
class Link extends Model
{
    use HasFactory;

    // 字段白名单
    protected $fillable = ['title', 'link'];

    // 缓存配置
    public $cache_key = 'l8bbs_links';
    protected $cache_expire_in_seconds = 1440 * 60; // 86400 分钟

    // 资源推荐
    public function getAllCached()
    {
        // 尝试从缓存中取出 cache_key 对应的数据。如果能取到，便直接返回数据。
        // 否则运行匿名函数中的代码来取出 links 表中所有的数据，返回的同时做了缓存。
        return Cache::remember($this->cache_key, $this->cache_expire_in_seconds, function(){
            return $this->all();
        });
    }
}
