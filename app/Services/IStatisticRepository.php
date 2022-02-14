<?php

namespace App\Services;

interface IStatisticRepository
{
    /**
     * @return array <'code' => count>
     */
    public function getList(): array;

    /**
     * @param string $code
     * @return void
     */
    public function incByCode(string $code): void;
}
