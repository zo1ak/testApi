<?php

namespace App\Commands;

use App\Http\Requests\StatisticRequest;
use App\Services\IStatisticRepository;

abstract class StatisticCommand
{
    protected IStatisticRepository $statistic;

    public function __construct(IStatisticRepository $statistic)
    {
        $this->statistic = $statistic;
    }

    abstract public function exec(?StatisticRequest $request): mixed;
}
