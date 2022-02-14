<?php

namespace App\Http\Controllers;

use App\Commands\GetList;
use App\Commands\Increment;
use App\Commands\StatisticCommand;
use App\Http\Requests\StatisticRequest;
use App\Services\IStatisticRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;

class StatisticController extends Controller
{
    /**
     * @var IStatisticRepository
     */
    protected IStatisticRepository $statistic;

    /**
     * @param  IStatisticRepository $statistic
     * @return void
     */
    public function __construct(IStatisticRepository $statistic)
    {
        $this->statistic = $statistic;
    }

    public function list(): JsonResponse
    {
        $command = new GetList($this->statistic);
        return $this->request($command);
    }

    public function inc(StatisticRequest $request): JsonResponse
    {
        $command = new Increment($this->statistic);
        return $this->request($command, $request);
    }

    private function request(StatisticCommand $command, ?StatisticRequest $request = null): JsonResponse
    {
        try {
            $result = $command->exec($request);
        }
        catch (\Throwable $e) {
            Log::error($e->getMessage());
            return response()->json(['error' => 'Internal Error'], 500);
        }
        return response()->json($result);
    }
}
