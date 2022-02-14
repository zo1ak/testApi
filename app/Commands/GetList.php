<?php

namespace App\Commands;

use App\Http\Requests\StatisticRequest;

class GetList extends StatisticCommand
{

    public function exec(?StatisticRequest $request): array
    {
        return $this->statistic->getList();
    }
}
