<?php

namespace App\Commands;

use App\Enums\Code;
use App\Http\Requests\StatisticRequest;

class Increment extends StatisticCommand
{

    public function exec(?StatisticRequest $request): bool
    {
        $code = Code::from($request->code);
        $this->statistic->incByCode($code);
        return true;
    }
}
