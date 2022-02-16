<?php

namespace App\Services;

use App\Enums\Code;

interface IStatisticRepository
{
    /**
     * @return array <'code' => count>
     */
    public function getList(): array;

    /**
     * @param Code $code
     * @return void
     */
    public function incByCode(Code $code): void;
}
