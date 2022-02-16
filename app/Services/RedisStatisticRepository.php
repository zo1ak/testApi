<?php

namespace App\Services;

use App\Enums\Code;
use Illuminate\Support\Facades\Redis;

class RedisStatisticRepository implements IStatisticRepository
{
    private const KEY_NAME = 'statistic';

    public function getList(): array
    {
        return (array) Redis::hgetall(self::KEY_NAME);
    }

    public function incByCode(Code $code): void
    {
        Redis::hincrby(self::KEY_NAME, $code->value, 1);
    }
}
