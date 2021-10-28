<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reply extends Model
{
    use HasFactory;

    protected $fillable = ['content'];

    // 模型关联
    public function topic()
    {
        // 一条回复属于一个话题
        return $this->belongsTo(Topic::class);
    }

    public function user()
    {
        // 一条回复属于一个作者所有
        return $this->belongsTo(User::class);
    }
}
