<?php

namespace Database\Factories;

use App\Models\Reply;
use Illuminate\Database\Eloquent\Factories\Factory;

use GuzzleHttp\Client;

// 话题回复工厂类
class ReplyFactory extends Factory
{
    protected $model = Reply::class;

    public function definition()
    {
        return [
            // $this->faker->name,
            'content' => $this->faker->sentence(),
            'topic_id' => rand(1, 100),
            'user_id' => rand(1, 10),
        ];
    }
}
