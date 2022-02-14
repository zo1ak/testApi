<?php

namespace App\Commands;

use App\Http\Requests\StatisticRequest;

class Increment extends StatisticCommand
{

    public function exec(?StatisticRequest $request): bool
    {
        $this->statistic->incByCode($request->code);
        return true;
    }
}
