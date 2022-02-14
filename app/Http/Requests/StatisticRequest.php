<?php

namespace App\Http\Requests;

use App\Enums\Code;
use Illuminate\Foundation\Http\FormRequest;

/**
 * @property string $code
 */
class StatisticRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $codes = array_map(fn(Code $code) => $code->value, Code::cases());
        return [
            'code' => 'required|string|in:' . implode(',', $codes),
        ];
    }
}
