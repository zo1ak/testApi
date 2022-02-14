<?php

namespace App\Services;

use Illuminate\Support\Facades\Redis;

class RedisStatisticRepository implements IStatisticRepository
{
    private const KEY_NAME = 'statistic';

    public function getList(): array
    {
        return (array) Redis::hgetall(self::KEY_NAME);
    }

    public function incByCode(string $code): void
    {
        Redis::hincrby(self::KEY_NAME, $code, 1);
    }
}
